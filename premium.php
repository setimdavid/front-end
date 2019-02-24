<?php require 'header.php'; ?>
<?php

if(isset($_SESSION["loggedin"])){
    if ($_SESSION["daily_status"] == 1) {
        $date_now = date("Y-m-d");
        $myDate = $_SESSION["daily_end_date"];
        if ($date_now > $myDate ) {
            echo '<script>window.location.href="sub-premium.php";</script>';
        }
    }else{
        echo '<script>window.location.href="sub-premium.php";</script>';  
    }
}else{
    echo '<script>window.location.href="subscription.php";</script>';
}

require('db.php');

$toDay = date('d-m-Y');
$premiumQuery = "select * from dat_daily_plays a inner join dat_tips_setup b on b.id = a.unique_id where b.tip_date_format = '" . $toDay . "'";
$premiumResults = mysqli_query($con,$premiumQuery) or die(mysql_error());

$todayQuery = "select tips_day from dat_tips_setup where tip_date_format = '" . $toDay . "'";
$toDayResults = mysqli_query($con,$todayQuery) or die(mysql_error());
$toDayDescription = date('d F Y');
?>

<div class="content">
    <div class="container_12">
        <div class="clear"></div>
        <div class="grid_12" style="margin-top:30px">
            <table id="table1">
                <thead>
                    <tr>
                        <td colspan="7"><h2> PREMIUM TIPS - <?php echo $toDayDescription;  ?>  </h2></td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td><strong> Country</strong></td>
                        <td><strong>Play Time</strong></td>
                        <td><strong>Match</strong></td>
                        <td><strong>Type</strong></td>
                        <td><strong>Odds</strong></td>
                        <td><strong>Pick</strong></td>
                    </tr>
                    <?php
                        $i = 1;
                        while ($row = mysqli_fetch_array($premiumResults)) {
                            echo '<tr>';
                                echo '<td>' . $i . '. </td>';
                                echo '<td><img border="1" class="countryJPImage" src="images/flags/' . strtolower($row['country']) . '.svg"></img></td>';
                                echo '<td>' . $row['play_time' ] . '</td>';
                                echo '<td>' . $row['home_team'] . ' VS ' . $row['away_team'] . '</td>';
                                echo '<td>' . $row['prediction_type'] . '</td>';
                                echo '<td>' . $row['prediction_odds'] . '</td>';
                                echo '<td>' . $row['prediction'] . '</td>';
                            echo '</tr>';
                            $i = $i + 1;
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php require 'footer.php';?>


