<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Home</title>
        <meta charset="utf-8">
        <meta name = "format-detection" content = "telephone=no" />
        <script src="/cdn-cgi/apps/head/3ts2ksMwXvKRuG480KNifJ2_JNM.js"></script><link rel="icon" href="images/favicon.ico">
        <link rel="shortcut icon" href="images/favicon.ico" />
        <link rel="stylesheet" href="css/owl.carousel.css">
        <link rel="stylesheet" href="css/camera.css">
        <link rel="stylesheet" href="css/touchTouch.css">
        <link rel="stylesheet" href="css/style.css">
        <script src="js/jquery.js"></script>
        <script src="js/jquery-migrate-1.1.1.js"></script>
        <script src="js/script.js"></script> 
        <script src="js/superfish.js"></script>
        <script src="js/jquery.equalheights.js"></script>
        <script src="js/jquery.mobilemenu.js"></script>
        <script src="js/jquery.easing.1.3.js"></script>
        <script src="js/jquery.ui.totop.js"></script>
        <script src="js/owl.carousel.js"></script> 
        <script src="js/touchTouch.jquery.js"></script>
        <script src="js/jquery.tabs.min.js"></script>
        <script src="js/camera.js"></script>
        <!--[if (gt IE 9)|!(IE)]><!-->
        <script src="js/jquery.mobile.customized.min.js"></script>
        <!--<![endif]-->
        <script>
            $(document).ready(function () {
                jQuery('#camera_wrap').camera({
                    loader: false,
                    pagination: true,
                    minHeight: '300',
                    thumbnails: false,
                    height: '40%',
                    caption: true,
                    navigation: false,
                    fx: 'mosaic'
                });
                /*carousel*/
                var owl = $("#owl");
                owl.owlCarousel({
                    items: 3, //10 items above 1000px browser width
                    itemsDesktop: [995, 3], //5 items between 1000px and 901px
                    itemsDesktopSmall: [767, 2], // betweem 900px and 601px
                    itemsTablet: [700, 2], //2 items between 600 and 0
                    itemsMobile: [479, 2], // itemsMobile disabled - inherit from itemsTablet option
                    navigation: false,
                    pagination: true
                });
                $('.gallery a.gal').touchTouch();
                $().UItoTop({easingType: 'easeOutQuart'});
            });
        </script>
    </head>
    <body class="page1" id="top">
        <header>
            <div class="container_12">
                <div class="grid_12">
                    <div class="menu_block ">
                        <div class="autor">
                            <a href="login.php">Login</a><a href="register.php">Register</a>
                        </div>
                        <nav class="horizontal-nav full-width horizontalNav-notprocessed">
                            <ul class="sf-menu">
                                <li class="current"><a href="index.php">Home</a></li>
                                <li><a href="premium.php">Premium Daily Tips</a></li>
                                <li><a href="pr-results.php">Previous Results</a></li>
                                <li><a href="jp-analysis.php">Jackpots Analysis</a></li>
                                <li><a href="jp-results.php">Jackpots Results</a></li>
                                <li><a href="contact.php">Contacts</a></li>
                            </ul>
                        </nav>
                        <div class="clear"></div>       
                    </div>
                </div>
            </div>
            <h1>
                <a href="index.php">
                    <img src="images/logo.png" alt="Your Happy Family">        
                </a>      
            </h1> 
        </header>