<?php
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
</head>
<body class="layout-v2">
    <!-- Start: Header Section -->
    <header id="header" class="navbar-wrapper">
        <div class="container">
            <div class="row">
                <nav class="navbar navbar-default">
                    <div class="col-sm-12">
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
                        <div class="bg-light">
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="navbar-header">
                                        <div class="navbar-brand">  
                                            <h1>
                                                <a href="home">
                                                    <img src="assets-public/images/libraria-logo-v2.png" alt="LIBRARIA" />
                                                </a>
                                            </h1>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-8">
                                    <div class="navbar-collapse hidden-sm hidden-xs">
                                        <ul class="nav navbar-nav">
                                            <li class="active"><a href="home">Home</a></li>
                                            <li><a href="books">Collection</a></li>
                                            <li><a href="contact">Contact</a></li>
                                        </ul>
                                    </div>
                                </div>
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
                                <li>
                                    <a href="books">Collection</a>
                                </li>
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
    <!-- Start: Slider Section -->
    <div data-ride="carousel" class="carousel slide" id="home-v1-header-carousel">
        <!-- Carousel slides -->
        <div class="carousel-inner">
            <div class="item active">
                <figure>
                    <img alt="Home Slide" src="assets-public/images/header-slider/home-v2/header-slide.jpg" />
                </figure>
                <div class="container">
                    <div class="carousel-caption">
                        <h3>Online Learning Anytime, Anywhere!</h3>
                        <h2>Discover Your Roots</h2>
                        <p>The only thing that you absolutely have to know, is the location of the library.</p>
                    </div>
                </div>
            </div>
            <div class="item">
                <figure>
                    <img alt="Home Slide" src="assets-public/images/header-slider/home-v2/header-slide.jpg" />
                </figure>
                <div class="container">
                    <div class="carousel-caption">
                        <h3>Online Learning Anytime, Anywhere!</h3>
                        <h2>Discover Your Roots</h2>
                        <p>Libraries store the energy that fuels the imagination. They open up windows to the world and inspire us to explore and achieve, and contribute to improving our quality of life.</p>
                    </div>
                </div>
            </div>
            <div class="item">
                <figure>
                    <img alt="Home Slide" src="assets-public/images/header-slider/home-v2/header-slide.jpg" />
                </figure>
                <div class="container">
                    <div class="carousel-caption">
                        <h3>Online Learning Anytime, Anywhere!</h3>
                        <h2>Discover Your Roots</h2>
                        <p>I have always imagined that Paradise will be a kind of a Library.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#home-v1-header-carousel" data-slide-to="0" class="active"></li>
            <li data-target="#home-v1-header-carousel" data-slide-to="1"></li>
            <li data-target="#home-v1-header-carousel" data-slide-to="2"></li>
        </ol>
    </div>
    <!-- End: Slider Section --><br><br><br>

    <!-- Start: Features -->
    <section class="features">
        <h1 class="text-center">Branch wise</h1><br><br>
        <div class="container">
            <ul>
                <li class="green-hover">
                    <div class="feature-box">
                        <i class="yellow"></i>
                        <h3>Programming Books</h3>
                        <p>Get Programming Books here for all the Years.</p>
                        <button class="btn btn-primary"><a href="training">Visit Section</a></button>
                        <!-- <button class="btn btn-primary semester"  data-modal-title="Choose your Semester"  data-toggle="modal" data-target="#sem-modal"  data-btn-label="Semester">Visit Page
                        </button> -->
                    </div>
                </li>
                <li class="yellow-hover">
                    <div class="feature-box">
                        <i class="light-green"></i>
                        <h3>Computer Science Books</h3>
                        <p>Get CSE Books here for all the years.</p>
                        <button class="btn btn-primary semester"  data-modal-title="Choose your Semester"  data-toggle="modal" data-target="#sem-modal"  data-btn-label="Semester">Visit Section
                        </button>
                    </div>
                </li>
                <li class="red-hover">
                    <div class="feature-box">
                        <i class="yellow"></i>
                        <h3>ECE Books</h3>
                        <p>Get ECE Books here for all the years.</p>
                        <button class="btn btn-primary semester"  data-modal-title="Choose your Semester"  data-toggle="modal" data-target="#sem-modalece"  data-btn-label="Semester">Visit Section
                        </button>
                    </div>
                </li>
                <li class="light-green-hover">
                    <div class="feature-box">
                        <i class="yellow"></i>
                        <h3>Electrical Books</h3>
                        <p>Get Electrical Books here for all the years.</p>
                        <button class="btn btn-primary semester"  data-modal-title="Choose your Semester"  data-toggle="modal" data-target="#sem-modalee"  data-btn-label="Semester">Visit Section
                        </button>
                    </div>
                </li>
                <li class="blue-hover">
                    <div class="feature-box">
                        <i class="light-green"></i>
                        <h3>Mechanical Books</h3>
                        <p>Get Mechanical Books here for all the years.</p>
                        <button class="btn btn-primary semester"  data-modal-title="Choose your Semester"  data-toggle="modal" data-target="#sem-modalmech"  data-btn-label="Semester">Visit Section
                        </button>
                    </div>
                </li>
                <li class="violet-hover">
                    <div class="feature-box">
                        <i class="light-green"></i>
                        <h3>Civil Books</h3>
                        <p>Get Civil Books here for all the years.</p>
                        <button class="btn btn-primary semester"  data-modal-title="Choose your Semester"  data-toggle="modal" data-target="#sem-modalcivil"  data-btn-label="Semester">Visit Section
                        </button>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <!-- End: Features -->
    <!-- Start: Category Filter -->
    <section class="category-filter section-padding">
        <div class="container">
            <div class="row">
                <div class="center-content">
                    <h2 class="section-title">Check Out The New Releases</h2>
                    <span class="underline center"></span>
                </div>
                <div id="category-filter">
                    <ul class="category-list">
                        <li class="category-item adults">
                            <figure>
                                <img src="assets-public/images/category-filter/home-v2/letusc.jpg" class="img-fluid"  alt="New Releaase" style="max-height: 320px">
                                <figcaption class="bg-yellow">
                                    <div class="diamond">
                                        <i class="book"></i>
                                    </div>
                                    <div class="info-block">
                                        <h4>Let Us C</h4>
                                        <span class="author"><strong>Author:</strong> Yashavant P.Kanetkar</span>
                                        <ol>
                                            <li>
                                                <a href="https://drive.google.com/file/d/1XyZGqo1ry3FKhWtD5BKHhTTpva1GpBZS/view?usp=sharing" data-toggle="blog-tags" data-placement="top" title="View/Download">
                                                    <i class="fa fa-arrow-down"></i>
                                                </a>
                                            </li>
                                        </ol>
                                    </div>
                                </figcaption>
                            </figure>
                        </li>
                        <li class="category-item kids-teens">
                            <figure>
                                <img src="assets-public/images/download/flask.jpg" class="img-fluid"  alt="New Releaase" style="max-height: 320px">
                                <figcaption class="bg-yellow">
                                    <div class="diamond">
                                        <i class="book"></i>
                                    </div>
                                    <div class="info-block">
                                        <h4>Flask Web Development</h4>
                                        <span class="author"><strong>Author:</strong> Miguel Grinberg</span>
                                        <ol>
                                            <li>
                                                <a href="https://drive.google.com/file/d/1tEvSpqY_AiDUR2uFGFRgjgZeyBHZpfDi/view?usp=sharing" data-toggle="blog-tags" data-placement="top" title="View/Download">
                                                    <i class="fa fa-arrow-down"></i>
                                                </a>
                                            </li>
                                        </ol>
                                    </div>
                                </figcaption>
                            </figure>
                        </li>
                        <li class="category-item video">
                            <figure>
                                <img src="assets-public/images/download/webhacking.jpg" class="img-fluid"  alt="New Releaase" style="max-height: 320px">
                                <figcaption class="bg-blue">
                                    <div class="diamond">
                                        <i class="dvd"></i>
                                    </div>
                                    <div class="info-block">
                                        <h4>Web Hacking</h4>
                                        <span class="author"><strong>Author:</strong> Peter Yaworski</span>
                                        <ol>
                                            <li>
                                                <a href="https://drive.google.com/file/d/1UIHYlDpFkoJERgc7qjt21a4_ur-L5ZwV/view?usp=sharing" data-toggle="blog-tags" data-placement="top" title="View/Download">
                                                    <i class="fa fa-arrow-down"></i>
                                                </a>
                                            </li>
                                        </ol>
                                    </div>
                                </figcaption>
                            </figure>
                        </li>
                        <li class="category-item audio">
                            <figure>
                                <img src="assets-public/images/download/headfirst.jpg" class="img-fluid"  alt="New Releaase" style="max-height: 320px">
                                <figcaption class="bg-blue">
                                    <div class="diamond">
                                        <i class="dvd"></i>
                                    </div>
                                    <div class="info-block">
                                        <h4>Head First:Java</h4>
                                        <span class="author"><strong>Author:</strong> Bert Bates and Kathy Sierra</span>
                                        <ol>
                                            <li>
                                                <a href="https://drive.google.com/file/d/1WC_BmZocvmZgCyq1ZIEDAG9eWKO7xdZM/view?usp=sharing" data-toggle="blog-tags" data-placement="top" title="View/Download">
                                                    <i class="fa fa-arrow-down"></i>
                                                </a>
                                            </li>
                                        </ol>
                                    </div>
                                </figcaption>
                            </figure>
                        </li>
                        <li class="category-item books">
                            <figure>
                                <img src="assets-public/images/download/headoops.jpg" class="img-fluid"  alt="New Releaase" style="max-height: 320px">
                                <figcaption class="bg-green">
                                    <div class="diamond">
                                        <i class="eaudio"></i>
                                    </div>
                                    <div class="info-block">
                                        <h4>Head First:OOP's</h4>
                                        <span class="author"><strong>Author:</strong> Brett McLaughlin</span>
                                        <ol>
                                            <li>
                                                <a href="https://drive.google.com/file/d/1XaR3ePNh7WaFNMIu-AvDKYfBbhPAG0iH/view?usp=sharing" data-toggle="blog-tags" data-placement="top" title="View/Download">
                                                    <i class="fa fa-arrow-down"></i>
                                                </a>
                                            </li>
                                        </ol>
                                    </div>
                                </figcaption>
                            </figure>
                        </li>
                        <li class="category-item magazines">
                            <figure>
                                <img src="assets-public/images/download/learningpython.jpg" class="img-fluid"  alt="New Releaase" style="max-height: 320px">
                                <figcaption class="bg-red">
                                    <div class="diamond">
                                        <i class="magazine"></i>
                                    </div>
                                    <div class="info-block">
                                        <h4>Learning Python</h4>
                                        <span class="author"><strong>Author:</strong> David Ascher</span>
                                        <ol>
                                            <li>
                                                <a href="https://drive.google.com/file/d/12m2ss3bCk86zPkQXzs0VVg7R6mZ8id7z/view?usp=sharing" data-toggle="blog-tags" data-placement="top" title="View/Download">
                                                    <i class="fa fa-arrow-down"></i>
                                                </a>
                                            </li>
                                        </ol>
                                    </div>
                                </figcaption>
                            </figure>
                        </li>
                        <li class="category-item adults">
                            <figure>
                                <img src="assets-public/images/download/c++.jpg" alt="New Releaase" class="img-fluid" style="max-height: 320px">
                                <figcaption class="bg-red">
                                    <div class="diamond">
                                        <i class="magazine"></i>
                                    </div>
                                    <div class="info-block">
                                        <h4>The C++ Programming Language</h4>
                                        <span class="author"><strong>Author:</strong> Bjarne Stroustrup</span>
                                        <ol>
                                            <li>
                                                <a href="https://drive.google.com/file/d/1Pd-JMsz30wgBu445zlu626qVx45LKQDT/view?usp=sharing" data-toggle="blog-tags" data-placement="top" title="View/Download">
                                                    <i class="fa fa-arrow-down"></i>
                                                </a>
                                            </li>
                                        </ol>
                                    </div>
                                </figcaption>
                            </figure>
                        </li>
                        <li class="category-item kids-teens">
                            <figure>
                                <img src="assets-public/images/download/training/41IhVboK7KL.jpg" class="img-fluid"  alt="New Releaase" style="max-height: 320px">
                                <figcaption class="bg-light-green">
                                    <div class="diamond">
                                        <i class="ebook"></i>
                                    </div>
                                    <div class="info-block">
                                        <h4>Docker</h4>
                                        <span class="author"><strong>Author:</strong> Brayden Smith</span>
                                        <ol>
                                            <li>
                                                <a href="https://drive.google.com/file/d/11DLm_Loogs1soQxvIlhFZ6SbR9SM6uO0/view?usp=sharing" data-toggle="blog-tags" data-placement="top" title="View/Download">
                                                    <i class="fa fa-arrow-down"></i>
                                                </a>
                                            </li>
                                        </ol>
                                    </div>
                                </figcaption>
                            </figure>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- Start: Category Filter -->
    <!-- Start: Welcome Section -->
    <section class="welcome-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="welcome-wrap">
                        <div class="welcome-text">
                            <h2 class="section-title">Welcome to the libraria</h2>
                            <span class="underline left"></span>
                            <p>Welcome to online library,the virtual world of books.This website has been developed for helping engineering students.Here you can read and download various kind of books according to your need.It is very convinient and user friendly with all the books being divided into different categories for your easy searching according to branch,year and others.<br>This website has been developed by Atul Sharma with support of Chaitanya Agrawal and Abhishek Tiwari graduating from NIT Manipur as a computer science aspirant.Your support will be appreciated and all the suggestions are welcomed.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="welcome-image">
                        <img src="assets-public/images/wellcome-image.jpg" class="algin-right" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End: Welcome Section -->
    <!-- Start: Facts Counter -->
    <div class="layout-v2-counter">
        <div class="facts-counter">
            <div class="container">
                <div class="row">
                    <ul>
                        <li class="color-light-green">
                            <div class="fact-item">
                                <div class="fact-icon">
                                    <i class="ebook"></i>
                                </div>
                                <span>CSE Books<strong class="fact-counter">40</strong></span>
                            </div>
                        </li>
                        <li class="color-green">
                            <div class="fact-item">
                                <div class="fact-icon">
                                    <i class="eaudio"></i>
                                </div>
                                <span>Civil Books<strong class="fact-counter">10</strong></span>
                            </div>
                        </li>
                        <li class="color-red">
                            <div class="fact-item">
                                <div class="fact-icon">
                                    <i class="magazine"></i>
                                </div>
                                <span>EE Books<strong class="fact-counter">9</strong></span>
                            </div>
                        </li>
                        <li class="color-blue">
                            <div class="fact-item">
                                <div class="fact-icon">
                                    <i class="eaudio"></i>
                                </div>
                                <span>ECE Books<strong class="fact-counter">16</strong></span>
                            </div>
                        </li>
                        <li class="color-blue">
                            <div class="fact-item">
                                <div class="fact-icon">
                                    <i class="magazine"></i>
                                </div>
                                <span>ME Books<strong class="fact-counter">9</strong></span>
                            </div>
                        </li>
                        <li class="color-blue">
                            <div class="fact-item">
                                <div class="fact-icon">
                                    <i class="ebook"></i>
                                </div>
                                <span>Other Books<strong class="fact-counter">35</strong></span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End: Facts Counter -->
    <!-- Start: Testimonials Section -->
    <section class="testimonials" id="community">
        <div class="container">
            <h3 class="section-title">Words From our Community</h3>
            <span class="underline center"></span>
            <div class="row">
                <div class="col-md-12" data-wow-delay="0.2s">
                    <div class="carousel slide" data-interval="false" data-ride="carousel" id="testimonials">
                        <!-- Carousel Slides / Quotes -->
                        <div class="carousel-inner text-center">
                            <!-- Quote 1 -->
                            <div class="item active">
                                <figure>
                                    <img src="assets-public/images/profile/avichal.jpg" alt="testimonials" style="max-height:200px" />
                                    <figcaption>
                                        <div class="client-name">Avichal Srivastav</div>
                                        <div class="designation">Student</div>
                                    </figcaption>
                                </figure>
                                <p>A great platform for getting important resources and books for college students. Great user interface and the platform also provides good recommendation for the essential books one must definitely read.Great work Atul and Team for this awesome idea and perfect implementation</p>
                            </div>
                            <!-- Quote 2 -->
                            <div class="item">
                                <figure>
                                    <img src="assets-public/images/profile/hridayeshsir.jpeg" alt="testimonials" style="max-height:200px" />
                                    <figcaption>
                                        <div class="client-name">Hridayesh Singh</div>
                                        <div class="designation">Student</div>
                                    </figcaption>
                                </figure>
                                <p>A much-needed website for every college student. All the essential books, whether curriculum books or programming guides are available in an organized manner. It's THE spot to discover the books one needs. Great job Atul and keep up the good work.</p>
                            </div>
                            <!-- Quote 3 -->
                            <div class="item">
                                <figure>
                                    <img src="assets-public/images/profile/atulsir.jpg" alt="testimonials" style="max-height:200px" />
                                    <figcaption>
                                        <div class="client-name">Atul Singh</div>
                                        <div class="designation">Student</div>
                                    </figcaption>
                                </figure>
                                <p>A very great and unique idea. This website is a great source.Now you don't have to wander around different websites just come at libraria you will find every thing.Great appreciation for Atul Sharma and his team as every engineering student will be glad to have this amazing website.</p>
                            </div>
                            <!-- Quote 4 -->
                            <!--<div class="item">
                                <figure>
                                    <img src="assets-public/images/testimonials-01.png" alt="testimonials" />
                                    <figcaption>
                                        <div class="client-name">Shashank Jha</div>
                                        <div class="designation">Student</div>
                                    </figcaption>
                                </figure>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent urna magna, rhoncus eget commodo et, dignissim non nulla. Sed sit amet vestibulum ex. Donec dolor velit, placerat non congue ac, cursus dictum sem. Praesent hendrerit convallis metus, at mollis lectus pretium molestie. Mauris suscipit vulputate vulputate. Sed aliquam scelerisque sem, in dapibus nibh posuere id. Praesent congue mauris at velit rutrum auctor.</p>
                            </div>-->
                            <!-- Quote 5 -->
                            <!--<div class="item">
                                <figure>
                                    <img src="assets-public/images/testimonials-01.png" alt="testimonials" />
                                    <figcaption>
                                        <div class="client-name">Dewal Chaturwedi</div>
                                        <div class="designation">Student</div>
                                    </figcaption>
                                </figure>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent urna magna, rhoncus eget commodo et, dignissim non nulla. Sed sit amet vestibulum ex. Donec dolor velit, placerat non congue ac, cursus dictum sem. Praesent hendrerit convallis metus, at mollis lectus pretium molestie. Mauris suscipit vulputate vulputate. Sed aliquam scelerisque sem, in dapibus nibh posuere id. Praesent congue mauris at velit rutrum auctor.</p>
                            </div> -->
                            <!-- Quote 6 -->
                            <!--<div class="item">
                                <figure>
                                    <img src="assets-public/images/testimonials-01.png" alt="testimonials" />
                                    <figcaption>
                                        <div class="client-name">Suchismita Dhal</div>
                                        <div class="designation">Student</div>
                                    </figcaption>
                                </figure>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent urna magna, rhoncus eget commodo et, dignissim non nulla. Sed sit amet vestibulum ex. Donec dolor velit, placerat non congue ac, cursus dictum sem. Praesent hendrerit convallis metus, at mollis lectus pretium molestie. Mauris suscipit vulputate vulputate. Sed aliquam scelerisque sem, in dapibus nibh posuere id. Praesent congue mauris at velit rutrum auctor.</p>
                            </div>-->
                            <!-- Quote 7 -->
                            <!--<div class="item">
                                <figure>
                                    <img src="assets-public/images/testimonials-01.png" alt="testimonials" />
                                    <figcaption>
                                        <div class="client-name">Tanmay Mishra</div>
                                        <div class="designation">Student</div>
                                    </figcaption>
                                </figure>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent urna magna, rhoncus eget commodo et, dignissim non nulla. Sed sit amet vestibulum ex. Donec dolor velit, placerat non congue ac, cursus dictum sem. Praesent hendrerit convallis metus, at mollis lectus pretium molestie. Mauris suscipit vulputate vulputate. Sed aliquam scelerisque sem, in dapibus nibh posuere id. Praesent congue mauris at velit rutrum auctor.</p>
                            </div>-->
                            
                            <!-- Carousel indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#testimonials" data-slide-to="0" class="active"></li>
                                <li data-target="#testimonials" data-slide-to="1"></li>
                                <li data-target="#testimonials" data-slide-to="2"></li>
                                <!--<li data-target="#testimonials" data-slide-to="3"></li>
                                <li data-target="#testimonials" data-slide-to="4"></li>
                                <li data-target="#testimonials" data-slide-to="5"></li>
                                <li data-target="#testimonials" data-slide-to="6"></li>-->
                            </ol>  
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End: Testimonials Section -->
    <!-- Start: Meet Staff -->
    <section class="team section-padding" id="team">
        <div class="container">
            <div class="center-content">
                <h2 class="section-title">Meet Our Developers</h2>
                <span class="underline center"></span>
            </div>
            <div class="team-list">
             <div class="team-member">
                    <figure>
                        <img src="assets-public/images/profile/atulsharma.jpg" alt="team" style ="max-height:300px;" />
                    </figure>
                    <div class="content-block">
                        <div class="member-info">
                            <h4>Atul Sharma</h4>
                            <span class="designation">CEO & Founder</span>
                            <ul class="social">
                                <li>
                                    <a href="https://www.linkedin.com/in/atul-sharma-476b651b0" target="_blank">
                                        <i class="fa fa-linkedin"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.facebook.com/profile.php?id=100050755634099" target="_blank">
                                        <i class="fa fa-facebook-f"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="team-member">
                    <figure>
                        <img src="assets-public/images/profile/chait.jpg" alt="team" style ="max-height:300px;" >
                    </figure>
                    <div class="content-block">
                        <div class="member-info">
                            <h4>Chaitanya Agrawal</h4>
                            <span class="designation">Co-Founder</span>
                            <ul class="social">
                                <li>
                                    <a href="https://www.linkedin.com/in/chaitanyaagrawal17" target="_blank">
                                        <i class="fa fa-linkedin"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.facebook.com/chaitanya.agrawal.338" target="_blank">
                                        <i class="fa fa-facebook-f"></i>
                                    </a>
                                </li>
                            </ul>
                            <p></p>
                        </div>
                    </div>
                </div>
                <div class="team-member">
                    <figure>
                        <img src="assets-public/images/profile/abhishek.jpg" alt="team" style ="max-height:290px;" />
                    </figure>
                    <div class="content-block">
                        <div class="member-info">
                            <h4>Abhishek Tiwari</h4>
                            <span class="designation">Co-Founder</span>
                            <ul class="social">
                                <li>
                                    <a href="https://www.linkedin.com/in/abhishek-tiwari-b86a1a19a" target="_blank">
                                        <i class="fa fa-linkedin"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.facebook.com/profile.php?id=100008338115771" target="_blank">
                                        <i class="fa fa-facebook-f"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End: Meet Staff -->
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
                                            <i class="fa fa-facebook-f"></i>
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
                                    <a class="google" href="https://instagram.com/proc0der?igshid=1ms9xk1yimb2l" target="_blank">
                                        <span>
                                            <i class="fa fa-instagram"></i>
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
                                    <span>(B-3) Boys Hostel-2,Nit Manipur,Langol,Imphal,795004</span>
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
    <?php
    echo $ci->load->view('public/include/semmodal','',true);
    ?>
    <?php
    echo $ci->load->view('public/include/semmodalece','',true);
    ?>
    <?php
    echo $ci->load->view('public/include/semmodalee','',true);
    ?>
    <?php
    echo $ci->load->view('public/include/semmodalcivil','',true);
    ?>
    <?php
    echo $ci->load->view('public/include/semmodalmech','',true);
    ?>
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
    <script src="assets-public/js/modal.js"></script>
</body>
</html>