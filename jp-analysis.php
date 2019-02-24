<?php require 'header.php'; ?>
<?php
//check if user is eligible
    if(isset($_SESSION["loggedin"])){
        if ($_SESSION["jackpot_status"] == 1) {
            $date_now = date("Y-m-d");
            $myDate = $_SESSION["jackpot_end_date"];
            if ($date_now > $myDate ) {
                echo '<script>window.location.href="sub-jackpot.php";</script>';
            }
        }else{
            echo '<script>window.location.href="sub-jackpot.php";</script>';  
        }
    }else{
        echo '<script>window.location.href="subscription.php";</script>';
    }
    require('db.php');
    $sportPesaQuery = "select * from dat_sportpesa_jackpot a INNER JOIN dat_jackpot_setup b on b.id = a.unique_id where b.status = 0 and a.status = 1";
    $sportPesaResult = mysqli_query($con,$sportPesaQuery) or die(mysql_error());

    $betinQuery = "select * from dat_betin_jackpot a INNER JOIN dat_jackpot_setup b on b.id = a.unique_id where b.status = 0 and a.status = 1";
    $betinResult = mysqli_query($con,$betinQuery) or die(mysql_error());

    $betikaQuery = "select * from dat_betika_jackpot a INNER JOIN dat_jackpot_setup b on b.id = a.unique_id where b.status = 0 and a.status = 1";
    $betikaResult = mysqli_query($con,$betikaQuery) or die(mysql_error());

    $sportPesaDescription = "";
    while ($row = mysqli_fetch_array($sportPesaResult)) {
        $sportPesaDescription  = $row['description'];
    }

?>

    <div class="content">
        <div class="container_12">
            <div class="clear"></div>
            <div class="grid_12" style="margin-top:30px">
                <div class="tabs">
                    <div class="div-nav  ">
                        <ul class="nav">
                            <li class="selected"><a href="#tab-1" class="">Sportpesa Mega Jackpot (17)</a></li>
                            <li><a href="#tab-2">Betika Jackpot (15)</a></li>
                            <li><a href="#tab-3">Betin JackPot (13)</a></li>
                        </ul>
                        <div class="clear"></div>
                    </div>
                    <div class="div-tabs">
                        <div  id="tab-1" class="tab-content"><span></span>
                            <div class="grid_11 alpha">
                                <table id="table1">
                                    <thead>
                                        <tr>
                                            <td colspan="5"><h2> Ksh : <?php echo $sportPesaDescription; ?></h2></td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php                                          
                                            while ($row = mysqli_fetch_array($sportPesaResult)) {
                                                for ($i = 1; $i < 18; $i++) { 
                                                    echo '<tr>';
                                                    echo '<td>' . $i . '. </td>';
                                                    echo '<td><img border="1" class="countryJPImage" src="images/flags/' . strtolower($row['country' . $i]) . '.svg"></img></td>';
                                                    echo '<td>' . $row['play_date_time' . $i] . '</td>';
                                                    echo '<td>' . $row['home_team' . $i] . ' VS ' . $row['away_team' . $i] . '</td>';
                                                    echo '<td>' . $row['prediction' . $i] . '</td>';
                                                    echo '</tr>';
                                                }
                                           }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div  id="tab-2" class="tab-content"><span></span>
                            <div class="grid_11 alpha">
                                <table id="table1">
                                    <thead>
                                        <tr>
                                            <td colspan="5"><h2> KSH : 20,000,000 </h2></td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php                                          
                                            while ($row = mysqli_fetch_array($betikaResult)) {
                                                for ($i = 1; $i < 16; $i++) { 
                                                    echo '<tr>';
                                                    echo '<td>' . $i . '. </td>';
                                                    echo '<td><img border="1" class="countryJPImage" src="images/flags/' . strtolower($row['country' . $i]) . '.svg"></img></td>';
                                                    echo '<td>' . $row['play_date_time' . $i] . '</td>';
                                                    echo '<td>' . $row['home_team' . $i] . ' VS ' . $row['away_team' . $i] . '</td>';
                                                    echo '<td>' . $row['prediction' . $i] . '</td>';
                                                    echo '</tr>';
                                                }
                                           }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div  id="tab-3" class="tab-content"><span></span>
                            <div class="grid_11 alpha">
                                <table id="table1">
                                    <thead>
                                        <tr>
                                            <td colspan="5"><h2> KSH : 5,000,000</h2></td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php                                          
                                            while ($row = mysqli_fetch_array($betinResult)) {
                                                for ($i = 1; $i < 14; $i++) { 
                                                    echo '<tr>';
                                                    echo '<td>' . $i . '. </td>';
                                                    echo '<td><img border="1" class="countryJPImage" src="images/flags/' . strtolower($row['country' . $i]) . '.svg"></img></td>';
                                                    echo '<td>' . $row['play_date_time' . $i] . '</td>';
                                                    echo '<td>' . $row['home_team' . $i] . ' VS ' . $row['away_team' . $i] . '</td>';
                                                    echo '<td>' . $row['prediction' . $i] . '</td>';
                                                    echo '</tr>';
                                                }
                                           }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>   
                </div> 
            </div>
        </div>
    </div>
<?php require 'footer.php';?>


