<?php
function website($page_content){
	$ci = get_instance();
	?>
	<!DOCTYPE html>
    <html lang="zxx">
    <head>
        <!-- Meta -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1">
        <!-- Title -->
        <title>..:: LIBRARIA ::..</title>

        <!-- Favicon -->
        <link href="assets-public/images/download/favicon.png" rel="icon" type="image/x-icon" />

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i%7CLato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet" />
        <link href="assets-public/css/font-awesome.min.css" rel="stylesheet" type="text/css" />

        <!-- Mobile Menu -->
        <link href="assets-public/css/mmenu.css" rel="stylesheet" type="text/css" />
        <link href="assets-public/css/mmenu.positioning.css" rel="stylesheet" type="text/css" />

        <!-- Stylesheet -->
        <link href="assets-public/style.css" rel="stylesheet" type="text/css" />

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="assets-public/js/html5shiv.min.js"></script>
        <script src="assets-public/js/respond.min.js"></script>
    <![endif]-->

</head>
<body>

    <!-- Start: Header Section -->
    <header id="header-v1" class="navbar-wrapper inner-navbar-wrapper">
        <div class="container">
            <div class="row">
                <nav class="navbar navbar-default">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="navbar-header">
                                <div class="navbar-brand">
                                    <h1>
                                        <a href="home">
                                            <img src="assets-public/images/libraria-logo-v1.png" alt="LIBRARIA" />
                                        </a>
                                    </h1>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <!-- Header Topbar -->
                            <div class="header-topbar hidden-sm hidden-xs">
                                <div class="row">
                                    <button style="float: right;"><a href="logout">LogOut</a></button>
                                    <div class="col-sm-6">
                                        <div class="topbar-info">
                                            <a href="tel:+91-9351282577"><i class="fa fa-phone"></i>+91-9351282577</a>
                                            <span>/</span>
                                            <a href="mailto:atulsharma100a@gmail.com"><i class="fa fa-envelope"></i>atulsharma100a@gmail.com</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="navbar-collapse hidden-sm hidden-xs">
                                <ul class="nav navbar-nav">
                                    <li><a href="home">Home</a></li>
                                    <li><a href="books">Collection</a></li>
                                    <li><a href="contact">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="mobile-menu hidden-lg hidden-md">
                        <a href="#mobile-menu"><i class="fa fa-navicon"></i></a>
                        <div id="mobile-menu">
                            <ul>
                                <li class="mobile-title">
                                    <h4>Navigation</h4>
                                    <a href="home" class="close"></a>
                                </li>
                                <li>
                                    <a href="home">Home</a>
                                </li>
                                <li><a href="books">Collection</a></li>
                                <li><a href="contact">Contact</a></li>
                                <button><a href="logout">LogOut</a></button>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!-- End: Header Section -->
    <?=$page_content ?>
    <!-- Start: Footer -->
    <footer class="site-footer">
        <div class="container">
            <div id="footer-widgets">
                <div class="row">
                    <div class="col-md-2 widget-container">
                        <div class="widget widget_social_icons">
                            <ul>
                                <li>
                                    <a class="facebook" href="https://www.facebook.com/profile.php?id=100050755634099" target="_blank">
                                        <span>
                                            <i class="fa fa-facebook"></i>
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a class="google" href="https://instagram.com/proc0der?igshid=1ms9xk1yimb2l" target="_blank">
                                        <span>
                                            <i class="fa fa-instagram"></i>
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a class="rss" href="https://github.com/atul9351" target="_blank">
                                        <span>
                                            <i class="fa fa-github"></i>
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a class="linkedin" href="https://www.linkedin.com/in/atul-sharma-476b651b0" target="_blank">
                                        <span>
                                            <i class="fa fa-linkedin"></i>
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 widget-container">
                        <div id="text-2" class="widget widget_text">
                            <h3 class="footer-widget-title">About Libraria</h3>
                            <span class="underline left"></span>
                            <div class="textwidget">
                                It has established in 2020 by Atul Sharma with support of Chaitanya Agrawal and Abhishek Tiwari.
                            </div>
                            <address>
                                <div class="info">
                                    <i class="fa fa-location-arrow"></i>
                                    <span>(B-3)Boys Hostel-2,Nit Manipur,Langol,Imphal,795004</span>
                                </div>
                                <div class="info">
                                    <i class="fa fa-envelope"></i>
                                    <span><a href="mailto:atulsharma100a@gmail.com">atulsharma100a@gmail.com</a></span>
                                </div>
                                <div class="info">
                                    <i class="fa fa-phone"></i>
                                    <span><a href="tel:+91-9351282577">+91-9351282577</a></span>
                                </div>
                            </address>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-6 widget-container">
                        <div id="nav_menu-2" class="widget widget_nav_menu">
                            <h3 class="footer-widget-title">Quick Links</h3>
                            <span class="underline left"></span>
                            <div class="menu-quick-links-container">
                                <ul id="menu-quick-links" class="menu">
                                    <li><a href="home">Home</a></li>
                                    <li><a href="books">Collection</a></li>
                                    <li><a href="home#team">Meet Our Staff</a></li>
                                    <li><a href="contact">Contact</a></li>
                                    <li><a href="home#community">Words from our community</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>                
        </div>
    </footer>
    <!-- End: Footer -->
    
    <!-- jQuery Latest Version 1.x -->
    <script type="text/javascript" src="assets-public/js/jquery-1.12.4.min.js"></script>

    <!-- jQuery UI -->
    <script type="text/javascript" src="assets-public/js/jquery-ui.min.js"></script>

    <!-- jQuery Easing -->
    <script type="text/javascript" src="assets-public/js/jquery.easing.1.3.js"></script>

    <!-- Bootstrap -->
    <script type="text/javascript" src="assets-public/js/bootstrap.min.js"></script>

    <!-- Mobile Menu -->
    <script type="text/javascript" src="assets-public/js/mmenu.min.js"></script>

    <!-- Harvey - State manager for media queries -->
    <script type="text/javascript" src="assets-public/js/harvey.min.js"></script>

    <!-- Waypoints - Load Elements on View -->
    <script type="text/javascript" src="assets-public/js/waypoints.min.js"></script>

    <!-- Facts Counter -->
    <script type="text/javascript" src="assets-public/js/facts.counter.min.js"></script>

    <!-- MixItUp - Category Filter -->
    <script type="text/javascript" src="assets-public/js/mixitup.min.js"></script>

    <!-- Owl Carousel -->
    <script type="text/javascript" src="assets-public/js/owl.carousel.min.js"></script>

    <!-- Accordion -->
    <script type="text/javascript" src="assets-public/js/accordion.min.js"></script>

    <!-- Responsive Tabs -->
    <script type="text/javascript" src="assets-public/js/responsive.tabs.min.js"></script>

    <!-- Responsive Table -->
    <script type="text/javascript" src="assets-public/js/responsive.table.min.js"></script>

    <!-- Masonry -->
    <script type="text/javascript" src="assets-public/js/masonry.min.js"></script>

    <!-- Carousel Swipe -->
    <script type="text/javascript" src="assets-public/js/carousel.swipe.min.js"></script>

    <!-- bxSlider -->
    <script type="text/javascript" src="assets-public/js/bxslider.min.js"></script>

    <!-- Google Map API -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAT5k-RhvFSVIuCALkpHhKgQx6SJUd9gpI"></script>

    <!-- Google Map (Custom Style) -->
    <script type="text/javascript" src="assets-public/js/google.map.js"></script>


    <!-- Custom Scripts -->
    <script type="text/javascript" src="assets-public/js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <script src="assets-public/js/modal.js"></script>
    <script src="assets-public/js/contact.js"></script>

</body>


</html>
<?php
}