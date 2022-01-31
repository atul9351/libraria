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
                                        <a href="signin">
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
                                    <li><a href="signin">Home</a></li>
                                    <li>
                                        <a href="signin">Collection</a>
                                    </li>
                                    <li><a href="signin">Contact</a></li>
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
                                    <a href="#" class="close"></a>
                                </li>
                                <li>
                                    <a href="signin">Home</a>
                                </li>
                                <li>
                                    <a href="signin">Collection</a>
                                </li>
                                <li><a href="signin">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!-- End: Header Section -->
    
    <!-- Start: Page Banner -->
    <section class="page-banner services-banner">
        <div class="container">
            <div class="banner-header">
                <h2>Signin</h2>
                <span class="underline center"></span>
                <p class="lead">Register here for Libraria.</p>
            </div>
            <div class="breadcrumb">
                <ul>
                    <li><a href="index-2">Home</a></li>
                    <li>Signin</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- End: Page Banner -->
    <!-- Start: Cart Section -->
    <div id="content" class="site-content">
        <div id="primary" class="content-area">
            <main id="main" class="site-main">
                <div class="signin-main">
                    <div class="container">
                        <div class="woocommerce">
                            <div class="woocommerce-login">
                                <div class="company-info signin-register">
                                    <div class="col-md-5 col-md-offset-1 border-dark-left">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="company-detail bg-dark margin-left">
                                                    <div class="signin-head">
                                                        <h2>Sign in</h2>
                                                        <span class="underline left"></span>
                                                    </div>
                                                    <form class="login-form" method="post" action="submit">
                                                        <p class="form-row form-row-first input-required">
                                                            <label>
                                                                <span class="first-letter">UserName</span>  
                                                                <span class="second-letter">*</span>
                                                            </label>
                                                            <input type="text"  id="username" name="username" class="input-text">
                                                        </p>
                                                        <p class="form-row form-row-last input-required">
                                                            <label>
                                                                <span class="first-letter">Password</span>  
                                                                <span class="second-letter">*</span>
                                                            </label>
                                                            <input type="password" id="password" name="password" class="input-text">
                                                        </p>
                                                        <div class="clear"></div>
                                                        <input type="submit" value="Login" name="login" class="button btn btn-default">
                                                        <div class="clear"></div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-5 border-dark new-user">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="company-detail new-account bg-light margin-right">
                                                    <div class="new-user-head">
                                                        <h2>Create New Account</h2>
                                                        <span class="underline left"></span>
                                                        <p>If no UserName has been assigned for your account, please contact the library.</p>
                                                    </div>
                                                    <form class="signin-form" method="post" action="submit">
                                                        <p class="form-row form-row-first input-required">
                                                            <label>
                                                                <span class="first-letter">UserName</span>  
                                                                <span class="second-letter">*</span>
                                                            </label>
                                                            <input type="text" id="username1" name="username" class="input-text form-control">
                                                        </p>
                                                        <p class="form-row input-required">
                                                            <label>
                                                                <span class="first-letter">Password</span>  
                                                                <span class="second-letter">*</span>
                                                            </label>
                                                            <input type="password" id="password1" name="password" class="input-text form-control">
                                                        </p>                                                                                
                                                        <div class="clear"></div>
                                                        <input type="submit" value="Signup" name="signup" class="button btn btn-default">
                                                        <div class="clear"></div>
                                                    </form> 
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <!-- End: Cart Section -->
    
    <!-- Start: Social Network -->
    <section class="social-network section-padding">
        <div class="container">
            <div>
                <h2 class="section-title">Follow Us</h2>
                <span class="underline"></span>
                <p class="lead">Catch Atul Sharma on the following media sites.</p>
            </div>
            <ul class ="center-content" style ="margin-left:auto;">
                
                <li>
                    <a class="google" href="https://instagram.com/proc0der?igshid=1ms9xk1yimb2l" target="_blank">
                        <span>
                            <i class="fa fa-instagram"></i>
                        </span>
                    </a>
                </li>
                <li>
                    <a class="rss" href="https://github.com/atul9351?tab=repositories" target="_blank">
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
                <li>
                    <a class="facebook" href="https://www.facebook.com/profile.php?id=100050755634099" target="_blank">
                        <span>
                            <i class="fa fa-facebook-f"></i>
                        </span>
                    </a>
                </li>
            </ul>
        </div>
    </section>
    <!-- End: Social Network -->
    
    <!-- Start: Footer -->
    <footer class="site-footer">
        <div class="container">
            <div id="footer-widgets">
                <div class="row">
                    <div class="col-md-4 col-sm-6 widget-container">
                        <div id="text-2" class="widget widget_text">
                            <h3 class="footer-widget-title">About Libraria</h3>
                            <span class="underline left"></span>
                            <div class="textwidget">
                                It has been established in 2020 by Atul Sharma with support of Abhishek Tiwari and Chaitanya Agrawal.
                            </div>
                            <address>
                                <div class="info">
                                    <i class="fa fa-location-arrow"></i>
                                    <span>(B-3) Boys Hostel-2 NIT Manipur,Langol,Imphal,India</span>
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
                                    <li><a href="signin">Home</a></li>
                                    <li><a href="signin">Collection</a></li>
                                    <li><a href="signin">Meet Our Staff</a></li>
                                    <li><a href="signin">Contact</a></li>
                                    <li><a href="signin">Words from our Community</a></li>
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
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->

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
    
    <!-- Custom Scripts -->
    <script type="text/javascript" src="assets-public/js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <script src="assets-public/js/custom.js"></script>
    <script src="assets-public/js/custom-script.js"></script>

</body>
</html>
