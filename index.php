<?php 
require 'header.php';
require('db.php');

//select the last record from tips setup
$toDayDescription = "13 Available Games - 21.67 Odds";
$toDay = date('d-m-Y');
$toDayQuery = "select description from dat_tips_setup where tip_date_format = '" . $toDay . "'";
$toDayResults = mysqli_query($con,$toDayQuery) or die(mysql_error());
while ($row = mysqli_fetch_array($toDayResults)) {
    $toDayDescription = $row['description'];
}

//select the last 5 from the tips setup
$oneDayDescription = "15 Games - 28.67 Odds Won";
$oneDay = date('d-m-Y',strtotime("-1 days"));
$oneDayQuery = "select description from dat_tips_setup where tip_date_format = '" . $oneDay . "'";
$oneDayResults = mysqli_query($con,$oneDayQuery) or die(mysql_error());
while ($row = mysqli_fetch_array($oneDayResults)) {
    $oneDayDescription = $row['description'];
}

$twoDayDescription = "17 Games - 24.56 Odds Won";
$twoDay = date('d-m-Y',strtotime("-2 days"));
$twoDayQuery = "select description from dat_tips_setup where tip_date_format = '" . $twoDay . "'";
$twoDayResults = mysqli_query($con,$twoDayQuery) or die(mysql_error());
while ($row = mysqli_fetch_array($twoDayResults)) {
    $twoDayDescription = $row['description'];
}

$threeDayDescription = "24 Games - 31.47 Odds Won";
$threeDay = date('d-m-Y',strtotime("-3 days"));
$threeDayQuery = "select description from dat_tips_setup where tip_date_format = '" . $threeDay . "'";
$threeDayResults = mysqli_query($con,$threeDayQuery) or die(mysql_error());
while ($row = mysqli_fetch_array($threeDayResults)) {
    $threeDayDescription = $row['description'];
}


$fourDayDescription = "12 Games - 12.45 Odds Won";
$fourDay = date('d-m-Y',strtotime("-4 days"));
$fourDayQuery = "select description from dat_tips_setup where tip_date_format = '" . $fourDay . "'";
$fourDayResults = mysqli_query($con,$fourDayQuery) or die(mysql_error());
while ($row = mysqli_fetch_array($fourDayResults)) {
    $fourDayDescription = $row['description'];
}



$fiveDayDescription = "19 Games - 28.36 Odds Won";
$fiveDay = date('d-m-Y',strtotime("-5 days"));
$fiveDayQuery = "select description from dat_tips_setup where tip_date_format = '" . $fiveDay . "'";
$fiveDayResults = mysqli_query($con,$fiveDayQuery) or die(mysql_error());
while ($row = mysqli_fetch_array($fiveDayResults)) {
    $fiveDayDescription = $row['description'];
}

?>

<style type="text/css">
    h4 {
        font-size: 20px !important;
        padding-top: 5px;
        margin-top: 10px;
        padding-bottom: 5px;
        margin-bottom: 10px;
    }

    h3 {
        font-size: 50px !important;
    }

    .betOffer{
        font-size: 50px !important;
        padding-top: 0px !important;
        margin-top: 0px !important;
        padding-bottom: 0px !important;
        margin-bottom: 0px !important;
    }

    .ban1 .title {
        font-weight: 700 !important;
    }
</style>
<div class="slider_wrapper ">
    <div id="camera_wrap" class="">
        <div data-src="images/slide.jpg">
            <div class="caption fadeIn">
                <h2>Your guide to football Betting</h2>
                <p>We provide different bet types 3 WAY i.e 1,2,X; BTTS, OVER 2.5, UNDER 2.5, HT/FT, FIRST HALF RESULTS/GOALS.We guarantee our customers with a minimum of 80% for daily tips</p>
                <a href="premium.php">PREMIUM TIPS!</a>
            </div>
        </div>
        <div data-src="images/slide1.jpg">
            <div class="caption fadeIn">
                <h2>Over 80% win rate on Bets</h2>
                <p>We guarantee our customer a minimum of 80% win rate with odds of 20 and above.</p>
                <a href="sign-up.php">Sign Up!</a>
            </div>
        </div>
        <div data-src="images/slide2.jpg">
            <div class="caption fadeIn">
                <h2>Popular Jackpot Analysis</h2>
                <p>Our Team of Pundits analyse the 3 Major Jackpots (Sportpesa Mega Jackpot, Betin Jackpot Ksh 20,000,000 and Betika Jackpot Ksh 5,000,000.)</p>
                <a href="jp-analysis.php">JACKPOT ANALYSIS!</a>
            </div>
        </div>    
    </div> 
</div>
<div class="content">
    <div class="container_12">
        <div class="grid_12">
            <h3>Latest Betting Tips<a href="premium.php" class="btn">Premium Daily Tips</a></h3>      
        </div>
        <div class="grid_4">
            <a href="premium.php" class="banner">
                <img src="images/default-status-1.png" alt="">
                <div class="ban">
                    <div class="ban1">
                        <span></span>
                        <div class="title"><?php echo  date('d-m-Y'); ?></div>
                        <strong><?php echo $toDayDescription; ?></strong>
                    </div>
                </div>
            </a>
        </div>
        <div class="grid_4">
            <a href="" class="banner">
                <img src="images/default-status-2.png" height="50%" alt="">
                <div class="ban">
                    <div class="ban1">
                        <span></span>
                        <div class="title"><?php echo $oneDay; ?></div>
                        <strong><?php echo $oneDayDescription; ?></strong>
                    </div>
                </div>
            </a>
        </div>
        <div class="grid_4">
            <a href="#" class="banner">
                <img src="images/default-status-3.png" alt="">
                <div class="ban">
                    <div class="ban1">
                        <span></span>
                        <div class="title"><?php echo $twoDay; ?></div>
                        <strong><?php echo $twoDayDescription; ?></strong>
                    </div>
                </div>
            </a>
        </div>
        <div class="grid_4">
            <a href="#" class="banner">
                <img src="images/default-status-4.png" alt="">
                <div class="ban">
                    <div class="ban1">
                        <span></span>
                        <div class="title"><?php echo $threeDay; ?></div>
                        <strong><?php echo $threeDayDescription; ?></strong>
                    </div>
                </div>
            </a>
        </div>
        <div class="grid_4">
            <a href="#" class="banner">
                <img src="images/default-status-5.png" alt="">
                <div class="ban">
                    <div class="ban1">
                        <span></span>
                        <div class="title"><?php echo $fourDay; ?></div>
                        <strong><?php echo $fourDayDescription; ?></strong>
                    </div>
                </div>
            </a>
        </div>
        <div class="grid_4">
            <a href="#" class="banner">
                <img src="images/default-status-6.png" alt="">
                <div class="ban">
                    <div class="ban1">
                        <span></span>
                        <div class="title"><?php echo $fiveDay; ?></div>
                        <strong><?php echo $fiveDayDescription; ?></strong>
                    </div>
                </div>
            </a>
        </div>
        <div class="grid_6">
            <h3 class="head1">Welcome To Sure Bets</h3>
            <p>Sure Bet is one of the largest and higher winning percentage betting tips operations in Kenya, turning over millions of 
                shillings each and every day. We have team of pundits who analysis daily matches and Jackpots for Mega Jackpot Sport Pesa,
                20 Million Shillings Betin jackpot and 5 Million Shilling Betika Jackpot.
            </p>
            We provide different bet types 3 WAY i.e 1,2,X; BTTS, OVER 2.5, UNDER 2.5, HT/FT, FIRST HALF RESULTS/GOALS. 
            We guarantee our customers with a minimum of 80% for daily tips.
            <br>
            <a href="#" class="btn bt1">Sign Up</a>
        </div>
        <div class="grid_6">
            <div class="tabs">
                <div class="div-nav  ">
                    <ul class="nav">
                        <li class="selected"><a  class="betOffer" href="#tab-1" class="">Bet Offers</a></li>
                    </ul>
                    <div class="clear"></div>
                </div>
                <div class="div-tabs">
                    <div  id="tab-1" class="tab-content"><span></span>
                        <ul>
                            <li>
                                <img src="images/tab_icon2.png" alt="">
                                <div class="extra_wrapper">
                                    <div class="col1">Number of Bets</div>
                                    <a href="#">At least 7 bet slips of 20 to 30 odds in total daily</a>
                                </div>
                            </li>
                            <li>
                                <img src="images/tab_icon2.png" alt="">
                                <div class="extra_wrapper">
                                    <div class="col1">Win Percentage</div>
                                    <a href="#">We offer over 80% sure bets </a>
                                </div>
                            </li>
                            <li>
                                <img src="images/tab_icon2.png" alt="">
                                <div class="extra_wrapper">
                                    <div class="col1">Jackpots</div>
                                    <a href="#">Well analysed Jackpots of (Sportpesa,Betin and Betika) </a>
                                </div>
                            </li>
                            <li>
                                <img src="images/tab_icon2.png" alt="">
                                <div class="extra_wrapper">
                                    <div class="col1">Bets Types</div>
                                    <a href="#">Correct Score(CS), DC, BTTS(GG), HF/FT AND OV/UN 2.5</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>   
            </div> 
        </div>
        <div class="clear"></div>
        <div class="row">
            <div class="grid_6 ">
                <img class="img-fluid" src="images/till-number.jpg" alt="Our till number">
            </div>
            <div class="grid_6">
                <ul>
                    <li>
                        <h4>1. On your Safaricom phone go to the M-PESA menu</h4>
                    </li>
                    <li>
                        <h4>2. Select Lipa Na M-PESA</h4>
                    </li>
                    <li>
                        <h4>3. Select Buy Goods and Services</h4>
                    </li>
                    <li>
                        <h4>4. Enter the Till Number <strong style="font-size: 50px; color : blue;">479799</strong></h4>
                    </li>
                    <li>
                        <h4>5. Enter the Amount. Minimum subscription fee option is Ksh. 50</h4>
                    </li>
                    <li>
                        <h4>6. Follow subsequent prompts to complete the transaction.</h4>
                    </li>
                    <li>
                       <h4>7. You will receive 2 messages; the second one will have your Username and password</h4>
                    </li>
                    <li>
                        <h4>8. Login to access our tips</h4>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<?php require 'footer.php';?>


