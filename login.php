<?php 
require 'header.php'; 
require('db.php');
$message = '';
if (isset($_POST)) {
    if (isset($_POST['username'], $_POST['password'])) {
        $username = filter_input(INPUT_POST, 'username', FILTER_DEFAULT);
        $passedPassword = trim(filter_input(INPUT_POST, 'password', FILTER_DEFAULT));
        // Prepare our SQL 
        if ($stmt = $con->prepare('SELECT id,middle_name,first_name,middle_name,last_name,phone_number,jackpot_status,jackpot_end_date,daily_status,daily_end_date,password,free_tips_end,refer_status FROM dat_subscriber_details WHERE phone_number = ?')) {
            $stmt->bind_param('s', $username);
            $stmt->execute(); 
            $stmt->store_result(); 
            // Store the result so we can check if the account exists in the database.
            if ($stmt->num_rows > 0) {
                $stmt->bind_result($id,$middle_name,$first_name,$middle_name,$last_name,$phone_number,$jackpot_status,$jackpot_end_date,$daily_status,$daily_end_date,$password,$free_tips_end,$refer_status);
                $stmt->fetch();      
                // Account exists, now we verify the password.
                if ($passedPassword === trim($password)) {
                    // Verification success! User has loggedin!
                    $_SESSION['loggedin'] = TRUE;
                    $_SESSION['id'] = $id;
                    $_SESSION['middle_name'] = $middle_name;
                    $_SESSION['first_name'] = $first_name;
                    $_SESSION['last_name'] = $last_name;
                    $_SESSION['phone_number'] = $phone_number;
                    $_SESSION['jackpot_status'] = $jackpot_status;
                    $_SESSION['jackpot_end_date'] = $jackpot_end_date;
                    $_SESSION['daily_status'] = $daily_status;
                    $_SESSION['daily_end_date'] = $daily_end_date;
                    $_SESSION['free_tips_end'] = $free_tips_end;
                    $_SESSION['refer_status'] = $refer_status;
                    $_SESSION['names'] =  $last_name . ' ' . $first_name;
                    echo '<script>window.location.href="index.php";</script>';
                } else {
                    $message = 'Incorrect username and/or password!';
                }
            } else {
                $message = 'Incorrect username and/or password!';
            }
            $stmt->close();
        } else {
            $message = 'Could not prepare statement!';
        }
    }else{
        $message = 'Incorrect username and/or password!';
    }
}

?>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:700,300,400">
<link rel="stylesheet" href="login/bootstrap.min.css">
<link rel="stylesheet" href="login/font-awesome.min.css">
<link rel="stylesheet" href="login/style.css">
<link rel="stylesheet" href="login/animate.css">
<link rel="stylesheet" href="login/magnific-popup.css">
<link rel="stylesheet" href="login/awesome-bootstrap-checkbox.css">
<link rel="stylesheet" href="login/media-queries.css">

<link rel="shortcut icon" href="assets/ico/favicon.png">
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="login/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="login/apple-touch-icon-114-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="login/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="login/apple-touch-icon-57-precomposed.png">

<style type="text/css">
    header h1 {
        bottom: -68px  !important;
    }

    body {
        background: url(../images/bg_body.png) 0 0 repeat #1e1e1e !important;
        font: 14px/18px 'Trebuchet MS',Arial,Helvetica,sans-serif !important;
    }

    .loginPage {
        width: 100% !important; 
    }

    .login-box button.btn{
        background: #99a3ec !important;
    }
</style>

<div class="content">
    <div class="loader">
        <div class="loader-img"></div>
    </div>
    <div class="container_12 loginPage">
        <div class="col-sm-6 col-sm-offset-3 login-box wow fadeInUp">
            <div class="l-form-top">
                <div class="l-form-top-left">
                    <h3>Sign in</h3>
                </div>
                <div class="l-form-top-right">
                    <i class="fa fa-lock"></i>
                </div>
                <div><?php echo $message; ?></div>
            </div>
            <div class="l-form-bottom">
                <form role="form" action="login.php" method="post">
                    <div class="form-group">
                        <label class="sr-only" for="l-form-username">Username</label>
                        <input type="text" name="username" placeholder="254712...." class="l-form-username form-control" id="l-form-username">
                    </div>
                    <div class="form-group">
                        <label class="sr-only" for="l-form-password">Password</label>
                        <input type="password" name="password" placeholder="Password..." class="l-form-password form-control" id="l-form-password">
                    </div>
                    <button type="submit" class="btn">Sign in!</button>
                    <div class="checkbox">
                        <input type="checkbox" id="remember-me" class="styled">
                        <label for="remember-me">Remember me</label>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="login/jquery-3.2.1.min.js"></script>
<script src="login/jquery-migrate-3.0.0.min.js"></script>
<script src="login/bootstrap.min.js"></script>
<script src="login/jquery.backstretch.min.js"></script>
<script src="login/wow.min.js"></script>
<script src="login/retina-1.1.0.min.js"></script>
<script src="login/jquery.magnific-popup.min.js"></script>
<script src="login/waypoints.min.js"></script>
<script src="login/jquery.countTo.js"></script>
<script src="login/masonry.pkgd.min.js"></script>
<script src="login/scripts.js"></script>
        <footer>   
            <div class="container_12">
                <div class="grid_10">
                    <div class="socials">
                        <a href="#"><img src="images/facebook.png" alt=""></a>
                        <a href="#"><img src="images/twitter.png" alt=""></a>
                        <a href="#"><img src="images/g_plus.png" alt=""></a>
                        <a href="#"><img src="images/pint.png" alt=""></a>
                    </div>
                    <a href="index.php" class="f_logo">
                        <img src="images/f_logo.png" alt="">
                    </a>
                </div>
            </div>  
        </footer>
        <script type="text/javascript">
            var _gaq = _gaq || [];
            _gaq.push(['_setAccount', 'UA-7078796-5']);
            _gaq.push(['_trackPageview']);
            (function () {
                var ga = document.createElement('script');
                ga.type = 'text/javascript';
                ga.async = true;
                ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                var s = document.getElementsByTagName('script')[0];
                s.parentNode.insertBefore(ga, s);
            })();</script>  
    </body><!-- Google Tag Manager --><noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-P9FT69"height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript><script>(function (w, d, s, l, i) {
        w[l] = w[l] || [];w[l].push({'gtm.start': new Date().getTime(), event: 'gtm.js'});var f = d.getElementsByTagName(s)[0], j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';
        j.async = true;
        j.src = '//www.googletagmanager.com/gtm.js?id=' + i + dl;
        f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-P9FT69');</script><!-- End Google Tag Manager -->
</html>


