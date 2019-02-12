
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
                    <!--==============================header=================================-->
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
                <a href="index.html">
                    <img src="images/logo.png" alt="Your Happy Family">        </a>      </h1> 
        </header>       

        <div class="slider_wrapper ">
            <div id="camera_wrap" class="">
                <div data-src="images/slide.jpg">
                    <div class="caption fadeIn">
                        <h2>Your guide to online sports betting</h2>
                        <p>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit  augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum.</p>
                        <a href="#">Bet now!</a>
                    </div>
                </div>
                <div data-src="images/slide1.jpg">
                    <div class="caption fadeIn">
                        <h2>Your guide to online sports betting</h2>
                        <p>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit  augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum.</p>
                        <a href="#">Bet now!</a>
                    </div>
                </div>
                <div data-src="images/slide2.jpg">
                    <div class="caption fadeIn">
                        <h2>Your guide to online sports betting</h2>
                        <p>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit  augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum.</p>
                        <a href="#">Bet now!</a>
                    </div>
                </div>    
            </div> 
        </div>
        <div class="content">
            <div class="container_12">
                <div class="grid_12">
                    <h3>Latest Betting Tips<a href="#" class="btn">Premium Daily Tips</a></h3>      
                </div>
                <div class="grid_4"><a href="#" class="banner">
                        <img src="images/page1_img1.jpg" alt="">
                        <div class="ban">
                            <div class="ban1">
                                <span></span>
                                <div class="title">30 min: Poker</div>
                                <strong>Wimbledon Doubles W</strong>
                            </div>
                            <div class="ban2"><span></span>
                                <div class="title">5/1-1/10</div>
                                <strong>Barrois / Garbin - Stosur / Stubbs</strong>
                            </div>
                        </div>
                    </a>
                  </div>
                <div class="grid_4"><a href="#" class="banner">
                        <img src="images/page1_img2.jpg" alt="">
                        <div class="ban">
                            <div class="ban1">
                                <span></span>
                                <div class="title">28 min: Hockey</div>
                                <strong>Mediterranean Games W</strong>
                            </div>
                            <div class="ban2">
                                <div class="title">1/1-18/25</div>
                                <strong>Russia W. - Netherlands W</strong>
                            </div>
                        </div>
                    </a></div>
                <div class="grid_4"><a href="#" class="banner">
                        <img src="images/page1_img3.jpg" alt="">
                        <div class="ban">
                            <div class="ban1">
                                <span></span>
                                <div class="title">25 min: Horse racing</div>
                                <strong>Fuimbledon M</strong>
                            </div>
                            <div class="ban2">
                                <div class="title">2/1-12/09</div>
                                <strong>Hewitt - Roddick</strong>
                            </div>
                        </div>
                    </a></div>
                <div class="grid_4"><a href="#" class="banner">
                        <img src="images/page1_img4.jpg" alt="">
                        <div class="ban">
                            <div class="ban1">
                                <span></span>
                                <div class="title">26 min: Swimming</div>
                                <strong>Wimbledon Doubles W</strong>
                            </div>
                            <div class="ban2">
                                <div class="title">7/2-3/0</div>
                                <strong>Barrois / Garbin - Stosur / Stubbs</strong>
                            </div>
                        </div>
                    </a></div>
                <div class="grid_4"><a href="#" class="banner">
                        <img src="images/page1_img5.jpg" alt="">
                        <div class="ban">
                            <div class="ban1">
                                <span></span>
                                <div class="title">13 min: Football</div>
                                <strong>Mediterranean Games W</strong>
                            </div>
                            <div class="ban2">
                                <div class="title">1/1-1/3</div>
                                <strong>Russia W. - Netherlands W</strong>
                            </div>
                        </div>
                    </a></div>
                <div class="grid_4"><a href="#" class="banner">
                        <img src="images/page1_img6.jpg" alt="">
                        <div class="ban">
                            <div class="ban1">
                                <span></span>
                                <div class="title">10 min: Martial Arts</div>
                                <strong>Fuimbledon M</strong>
                            </div>
                            <div class="ban2">
                                <div class="title">2/1-0/0</div>
                                <strong>Hewitt - Roddick</strong>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="grid_8">
                    <h3 class="head1">Welcome to our  website</h3>
                    <p>Betsite is one of the largest and most successful online betting operations in the world, turning over millions of pounds each and every day. Unlike traditional bookmakers Betsite provides a service which allows punters to bet with other punters.</p>
                    Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. <br> <a href="#" class="btn bt1">More info</a>
                </div>
                <div class="grid_4">
                    <h3 class="head1">Payment</h3>
                    <div class="pay">
                        <a href="#"><img src="images/pay1.png" alt=""></a>
                        <a href="#"><img src="images/pay2.png" alt=""></a>
                        <a href="#"><img src="images/pay3.png" alt=""></a>
                        <a href="#"><img src="images/pay4.png" alt=""></a>
                        <a href="#"><img src="images/pay5.png" alt=""></a>
                        <a href="#"><img src="images/pay6.png" alt=""></a>
                        <a href="#"><img src="images/pay7.png" alt=""></a>
                        <a href="#"><img src="images/pay8.png" alt=""></a>
                        <a href="#"><img src="images/pay9.png" alt=""></a>
                    </div>
                </div>
                <div class="clear"></div>
                <div class="grid_6">
                    <h3 class="head1 mb0">Popular bets</h3>
                    <div id="owl" class="gallery">
                        <div class="item">
                            <a href="images/big1.jpg" class="gal"><img src="images/small1.jpg" alt=""></a>
                            <a href="images/big4.jpg" class="gal"><img src="images/small4.jpg" alt=""></a>
                            <a href="images/big7.jpg" class="gal"><img src="images/small7.jpg" alt=""></a>
                            <a href="images/big10.jpg" class="gal"><img src="images/small10.jpg" alt=""></a>
                        </div>
                        <div class="item">
                            <a href="images/big2.jpg" class="gal"><img src="images/small2.jpg" alt=""></a>
                            <a href="images/big5.jpg" class="gal"><img src="images/small5.jpg" alt=""></a>
                            <a href="images/big8.jpg" class="gal"><img src="images/small8.jpg" alt=""></a>
                            <a href="images/big11.jpg" class="gal"><img src="images/small11.jpg" alt=""></a>
                        </div>
                        <div class="item">
                            <a href="images/big3.jpg" class="gal"><img src="images/small3.jpg" alt=""></a>
                            <a href="images/big6.jpg" class="gal"><img src="images/small6.jpg" alt=""></a>
                            <a href="images/big9.jpg" class="gal"><img src="images/small9.jpg" alt=""></a>
                            <a href="images/big12.jpg" class="gal"><img src="images/small12.jpg" alt=""></a>
                        </div>
                        <div class="item">
                            <a href="images/big1.jpg" class="gal"><img src="images/small1.jpg" alt=""></a>
                            <a href="images/big4.jpg" class="gal"><img src="images/small4.jpg" alt=""></a>
                            <a href="images/big7.jpg" class="gal"><img src="images/small7.jpg" alt=""></a>
                            <a href="images/big10.jpg" class="gal"><img src="images/small10.jpg" alt=""></a>
                        </div>
                        <div class="item">
                            <a href="images/big2.jpg" class="gal"><img src="images/small2.jpg" alt=""></a>
                            <a href="images/big5.jpg" class="gal"><img src="images/small5.jpg" alt=""></a>
                            <a href="images/big8.jpg" class="gal"><img src="images/small8.jpg" alt=""></a>
                            <a href="images/big11.jpg" class="gal"><img src="images/small11.jpg" alt=""></a>
                        </div>
                        <div class="item">
                            <a href="images/big3.jpg" class="gal"><img src="images/small3.jpg" alt=""></a>
                            <a href="images/big6.jpg" class="gal"><img src="images/small6.jpg" alt=""></a>
                            <a href="images/big9.jpg" class="gal"><img src="images/small9.jpg" alt=""></a>
                            <a href="images/big12.jpg" class="gal"><img src="images/small12.jpg" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="grid_6">
                    <div class="tabs">
                        <div class="div-nav  ">
                            <ul class="nav">
                                <li class="selected"><a href="#tab-1" class="">Nam liber </a></li>
                                <li><a href="#tab-2">Claritas </a></li>
                                <li><a href="#tab-3">Duisute </a></li>
                            </ul>
                            <div class="clear"></div>
                        </div>
                        <div class="div-tabs">
                            <div  id="tab-1" class="tab-content"><span></span>
                                <ul>
                                    <li>
                                        <img src="images/tab_icon1.png" alt="">
                                        <div class="extra_wrapper">
                                            <div class="col1">1/100 - 10/1</div>
                                            <a href="#">Typi non habent claritatem insitam; est usus legentis in</a>
                                        </div>
                                    </li>
                                    <li>
                                        <img src="images/tab_icon2.png" alt="">
                                        <div class="extra_wrapper">
                                            <div class="col1">1/1 - 10/1</div>
                                            <a href="#">Habent claritatem insitam; est usus legentis in iis qui </a>
                                        </div>
                                    </li>
                                    <li>
                                        <img src="images/tab_icon3.png" alt="">
                                        <div class="extra_wrapper">
                                            <div class="col1">3/4 - 7/6</div>
                                            <a href="#">Claritatem insitam; est usus legentis in iis qui facit </a>
                                        </div>
                                    </li>
                                    <li>
                                        <img src="images/tab_icon4.png" alt="">
                                        <div class="extra_wrapper">
                                            <div class="col1">3/6- 11/1</div>
                                            <a href="#">Est usus legentis in iis qui facit eorum claritatem.</a>
                                        </div>
                                    </li>
                                    <li>
                                        <img src="images/tab_icon5.png" alt="">
                                        <div class="extra_wrapper">
                                            <div class="col1">1/7 - 10/1</div>
                                            <a href="#">Von habent claritatem insitam; est usus legequi facit </a>
                                        </div>
                                    </li>
                                    <li>
                                        <img src="images/tab_icon6.png" alt="">
                                        <div class="extra_wrapper">
                                            <div class="col1">1/2 - 10/1</div>
                                            <a href="#">Derentis in iis qui facit eorum claritatgationes</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div  id="tab-2" class="tab-content"><span></span>
                                <ul>

                                    <li>
                                        <img src="images/tab_icon4.png" alt="">
                                        <div class="extra_wrapper">
                                            <div class="col1">3/6- 11/1</div>
                                            <a href="#">Est usus legentis in iis qui facit eorum claritatem.</a>
                                        </div>
                                    </li>
                                    <li>
                                        <img src="images/tab_icon5.png" alt="">
                                        <div class="extra_wrapper">
                                            <div class="col1">1/7 - 10/1</div>
                                            <a href="#">Von habent claritatem insitam; est usus legequi facit </a>
                                        </div>
                                    </li>
                                    <li>
                                        <img src="images/tab_icon6.png" alt="">
                                        <div class="extra_wrapper">
                                            <div class="col1">1/2 - 10/1</div>
                                            <a href="#">Derentis in iis qui facit eorum claritatgationes</a>
                                        </div>
                                    </li>
                                    <li>
                                        <img src="images/tab_icon1.png" alt="">
                                        <div class="extra_wrapper">
                                            <div class="col1">1/100 - 10/1</div>
                                            <a href="#">Typi non habent claritatem insitam; est usus legentis in</a>
                                        </div>
                                    </li>
                                    <li>
                                        <img src="images/tab_icon2.png" alt="">
                                        <div class="extra_wrapper">
                                            <div class="col1">1/1 - 10/1</div>
                                            <a href="#">Habent claritatem insitam; est usus legentis in iis qui </a>
                                        </div>
                                    </li>
                                    <li>
                                        <img src="images/tab_icon3.png" alt="">
                                        <div class="extra_wrapper">
                                            <div class="col1">3/4 - 7/6</div>
                                            <a href="#">Claritatem insitam; est usus legentis in iis qui facit </a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div  id="tab-3" class="tab-content"><span></span>
                                <ul>
                                    <li>
                                        <img src="images/tab_icon6.png" alt="">
                                        <div class="extra_wrapper">
                                            <div class="col1">1/2 - 10/1</div>
                                            <a href="#">Derentis in iis qui facit eorum claritatgationes</a>
                                        </div>
                                    </li>
                                    <li>
                                        <img src="images/tab_icon1.png" alt="">
                                        <div class="extra_wrapper">
                                            <div class="col1">1/100 - 10/1</div>
                                            <a href="#">Typi non habent claritatem insitam; est usus legentis in</a>
                                        </div>
                                    </li>
                                    <li>
                                        <img src="images/tab_icon4.png" alt="">
                                        <div class="extra_wrapper">
                                            <div class="col1">3/6- 11/1</div>
                                            <a href="#">Est usus legentis in iis qui facit eorum claritatem.</a>
                                        </div>
                                    </li>
                                    <li>
                                        <img src="images/tab_icon5.png" alt="">
                                        <div class="extra_wrapper">
                                            <div class="col1">1/7 - 10/1</div>
                                            <a href="#">Von habent claritatem insitam; est usus legequi facit </a>
                                        </div>
                                    </li>
                                    <li>
                                        <img src="images/tab_icon2.png" alt="">
                                        <div class="extra_wrapper">
                                            <div class="col1">1/1 - 10/1</div>
                                            <a href="#">Habent claritatem insitam; est usus legentis in iis qui </a>
                                        </div>
                                    </li>
                                    <li>
                                        <img src="images/tab_icon3.png" alt="">
                                        <div class="extra_wrapper">
                                            <div class="col1">3/4 - 7/6</div>
                                            <a href="#">Claritatem insitam; est usus legentis in iis qui facit </a>
                                        </div>
                                    </li>


                                </ul>
                            </div>
                        </div>   
                    </div> 
                </div>
            </div>
        </div>

        <!--==============================footer=================================-->

        <footer>   
            <div class="container_12">
                <div class="grid_12">
                    <div class="socials">
                        <a href="#"><img src="images/facebook.png" alt=""></a>
                        <a href="#"><img src="images/twitter.png" alt=""></a>
                        <a href="#"><img src="images/g_plus.png" alt=""></a>
                        <a href="#"><img src="images/pint.png" alt=""></a>
                    </div>
                    <a href="index.php" class="f_logo">
                        <img src="images/f_logo.png" alt="">
                    </a>
                    <div class="copy">
                        &copy; <span id="copyright-year"></span> &nbsp; <a href="#">Privacy Policy</a> <!--{%FOOTER_LINK} --><div></div>
                    </div>
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

