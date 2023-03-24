<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta Data -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PT. Enesers Mitra Berkah</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- Stlylesheet -->
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('css/font-awesome/css/font-awesome.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('css/no-ui-slider/jquery.nouislider.css') }}" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Skin Color -->
    <link rel="stylesheet" href="{{ asset('css/colors/green.css') }}" id="color-skins" />
</head>

<body>
    <a href="https:/wa.me/+6281222005074" target="_blank" class="whatsapp_float"><i
            class="fa-brands fa-whatsapp whatsapp-icon"></i></a>

    <!-- Start Preloader -->
    <div id="loader">
        <div class="spinner">
            <div class="cube cube0"></div>
            <div class="cube cube1"></div>
            <div class="cube cube2"></div>
            <div class="cube cube3"></div>
            <div class="cube cube4"></div>
            <div class="cube cube5"></div>
            <div class="cube cube6"></div>
            <div class="cube cube7"></div>
            <div class="cube cube8"></div>
            <div class="cube cube9"></div>
            <div class="cube cube10"></div>
            <div class="cube cube11"></div>
            <div class="cube cube12"></div>
            <div class="cube cube13"></div>
            <div class="cube cube14"></div>
            <div class="cube cube15"></div>
        </div>
    </div>
    <!-- End Preloader -->

    <!-- Start Header -->
    <header>
        <nav class="navbar navbar-default navbar-alt" role="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand to-top" rel="home" href="#">
                        <img src="img/assets/coba.png" alt="Enesers" class="logo-big">
                        <img src="img/assets/coba.png" alt="Enesers" class="logo-small">
                    </a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="main-nav">
                    <ul class="nav navbar-nav  navbar-right">
                        <li>
                            <a class="to-top">
                                Home
                            </a>
                        </li>
                        <li class="to-section">
                            <a href="#about">
                                About Us
                            </a>
                        </li>
                        <li class="to-section">
                            <a href="#team">
                                Team
                            </a>
                        </li>
                        <li class="to-section">
                            <a href="#portfolio">
                                Products
                            </a>
                        </li>
                        <li class="to-section">
                            <a href="#contact">
                                Contact
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>
    </header>
    <!-- End Header -->

    <!-- Start Home Revolution Slider Parallax Section -->
    <section id="home-revolution-slider">
        <div class="hero">
            <div class="tp-banner-container">
                <div class="tp-banner">
                    <ul>
                        <!-- SLIDE 1 -->
                        <li data-transition="fade" data-slotamount="7" data-masterspeed="2000"
                            data-thumb="img/backgrounds/enesers.jpg" data-delay="10000" data-saveperformance="on"
                            data-title="We Are Visual">
                            <img src="img/backgrounds/enesers.jpg" alt="slidebg1" data-bgposition="center top"
                                data-bgfit="cover" data-bgrepeat="no-repeat">
                        </li>

                        <!-- SLIDE 2 -->
                        <li data-transition="fade" data-slotamount="7" data-masterspeed="2000"
                            data-thumb="img/backgrounds/enesers4.jpg" data-delay="10000" data-saveperformance="on"
                            data-title="Digital Agency">
                            <img src="img/backgrounds/enesers4.jpg" alt="slidebg1" data-bgposition="center top"
                                data-bgfit="cover" data-bgrepeat="no-repeat">
                        </li>

                        <!-- SLIDE 3 -->
                        <li data-transition="fade" data-slotamount="7" data-masterspeed="2000"
                            data-thumb="img/backgrounds/enesers3.jpg" data-delay="10000" data-saveperformance="on"
                            data-title="Creative Coders">
                            <img src="img/backgrounds/enesers3.jpg" alt="slidebg1" data-bgposition="center top"
                                data-bgfit="cover" data-bgrepeat="no-repeat">
                        </li>
                    </ul>
                    <div class="tp-bannertimer"></div>
                </div>
                <div class="home-bottom">
                    <div class="container text-center">
                        <div class="move bounce">
                            <a href="#features" class="ion-ios-arrow-down btn-scroll">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Home Revolution Slider Parallax Section -->

    <div class="site-wrapper content">

        <!-- Start Features Section -->
        <section id="features">
            <div class="container">
                <div class="col-md-12 text-center wow fadeInUp">
                    <h3 class="section-title">About our Company</h3>
                    <p class="subheading">We are a small<span class="highlight"> creative team</span>, trying to enrich
                        the lives of others</p>
                </div>
                {{-- <div class="row features-row wow fadeInUp">
                    <div class="col-md-4 col-sm-12 feature-column">
                        <div class="feature-icon">
                            <i class="icon-eyeglasses size-2x highlight"></i>
                            <i class="icon-eyeglasses back-icon"></i>
                        </div>
                        <div class="feature-info">
                            <h4>Parallax Design</h4>
                            <p class="feature-description">Vivamus molestie phasellus enim sed orci eu pharetra. Donec
                                posuere nunc vitae tortor sagittis feugiat in non massa.</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 feature-column">
                        <div class="feature-icon">
                            <i class="icon-lock-open size-2x highlight"></i>
                            <i class="icon-lock-open back-icon"></i>
                        </div>
                        <div class="feature-info">
                            <h4>Fully Responsive</h4>
                            <p class="feature-description">Vivamus molestie phasellus enim sed orci eu pharetra. Donec
                                posuere nunc vitae tortor sagittis feugiat in non massa.</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 feature-column">
                        <div class="feature-icon">
                            <i class="icon-energy size-2x highlight"></i>
                            <i class="icon-energy back-icon"></i>
                        </div>
                        <div class="feature-info">
                            <h4>Fast & Smooth</h4>
                            <p class="feature-description">Vivamus molestie phasellus enim sed orci eu pharetra. Donec
                                posuere nunc vitae tortor sagittis feugiat in non massa.</p>
                        </div>
                    </div>
                </div>
                <div class="row wow fadeInUp">
                    <div class="col-md-4 col-sm-12 feature-column">
                        <div class="feature-icon">
                            <i class="icon-settings size-2x highlight"></i>
                            <i class="icon-settings back-icon"></i>
                        </div>
                        <div class="feature-info">
                            <h4>Seo Optimized </h4>
                            <p class="feature-description">Vivamus molestie phasellus enim sed orci eu pharetra. Donec
                                posuere nunc vitae tortor sagittis feugiat in non massa.</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 feature-column">
                        <div class="feature-icon">
                            <i class="icon-book-open size-2x highlight"></i>
                            <i class="icon-book-open back-icon"></i>
                        </div>
                        <div class="feature-info">
                            <h4>Clean Code</h4>
                            <p class="feature-description">Vivamus molestie phasellus enim sed orci eu pharetra. Donec
                                posuere nunc vitae tortor sagittis feugiat in non massa.</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 feature-column">
                        <div class="feature-icon">
                            <i class="icon-support size-2x highlight"></i>
                            <i class="icon-support back-icon"></i>
                        </div>
                        <div class="feature-info">
                            <h4>Free 24/7 Support</h4>
                            <p class="feature-description">Vivamus molestie phasellus enim sed orci eu pharetra. Donec
                                posuere nunc vitae tortor sagittis feugiat in non massa.</p>
                        </div>
                    </div>
                </div> --}}
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 text-justify about-text">
                            <h3 class="wow fadeInUp">Our Story </h3>
                            <p class="wow fadeInUp">Enesers or PT. Enesers Mitra Berkah (EMB) stand legally on
                                November 25,
                                2016 but actually research from product
                                development and our company we have started in 2012, PT. Enesers Mitra Berkah (EMB) is
                                one
                                of 4 partner health tool
                                group companies. PT. Enesers Mitra Berkah (EMB) equips the 3 partner companies of the
                                previous group namely :</p>
                            <p class="wow fadeInUp">PT. Mitra Inti Medika (MIM),</p>
                            <p class="wow fadeInUp">PT. Mitra Tera Akurasi (MTA), and</p>
                            <p class="wow fadeInUp">PT. Miramed Jaya Mandiri</p>
                            {{-- <p class="wow fadeInUp">
                                <button type="button" class="btn btn-primary btn-md">Get in Touch</button>
                            </p> --}}
                        </div>
                        <div class="col-md-6 wow fadeInUp about-text">
                            <div class="video-container">
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/bYzfNeTLVHY"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    allowfullscreen></iframe>
                            </div>
                            {{-- <h3 class="wow fadeInUp">Our Company Profile </h3>
                            <div class="progress-bars">
                                <p>Branding</p>
                                <div class="progress" data-percent="90%">
                                    <div class="progress-bar">
                                        <span class="progress-bar-tooltip">90%</span>
                                    </div>
                                </div>
                                <p>User Experiance</p>
                                <div class="progress" data-percent="80%">
                                    <div class="progress-bar">
                                        <span class="progress-bar-tooltip">80%</span>
                                    </div>
                                </div>
                                <p>Web Design</p>
                                <div class="progress" data-percent="70%">
                                    <div class="progress-bar">
                                        <span class="progress-bar-tooltip">70%</span>
                                    </div>
                                </div>
                            </div> --}}

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Features Section -->

        <!-- Start Fun Facts Section -->
        <section id="fun-facts" class="parallax-section-5">
            <div class="container">
                <div class="col-md-12 text-center white wow fadeInUp">
                    <h3 class="section-title">Some interesting facts about us</h3>
                    <p class="subheading">Interdisciplinary team with <span class="highlight">big ideas</span> and
                        challenges.</p>
                </div>
                <div class="counter-row row text-center wow fadeInUp">
                    <div class="col-md-3 col-sm-6 fact-container">
                        <div class="fact">
                            <span class="counter highlight">840</span>
                            <h4>Happy Customers</h4>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 fact-container">
                        <div class="fact">
                            <span class="counter highlight">385</span>
                            <h4>Finished Projects</h4>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 fact-container">
                        <div class="fact">
                            <h2 class="counter highlight">65892</h2>
                            <h4>Lines of codes written</h4>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 fact-container">
                        <div class="fact">
                            <span class="counter highlight">25</span>
                            <h4>Winning Awards</h4>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Fun Facts Section -->

        <!-- Start Team Section -->
        <section id="team">
            <div class="container">
                <div class="col-md-12 text-center wow fadeInUp">
                    <h3 class="section-title">Meet the Crew.</h3>
                    <p class="subheading">Interdisciplinary team with <span class="highlight">big ideas</span> and
                        challenges.</p>
                </div>
                <div class="row">
                    <div class="col-md-3 col-sm-3 team-member">
                        <div class="effect effects wow fadeInUp">
                            <div class="img">
                                <img src="img/team/team-1.jpg" class="img-responsive" alt="" />
                                <div class="overlay">
                                    <ul class="expand">
                                        <li class="social-icon">
                                            <a href="#" onClick="return false;">
                                                <i class="icon-social-facebook"></i>
                                            </a>
                                        </li>
                                        <li class="social-icon">
                                            <a href="#" onClick="return false;">
                                                <i class="icon-social-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="social-icon">
                                            <a href="#" onClick="return false;">
                                                <i class=" icon-envelope-open"></i>
                                            </a>
                                        </li>
                                    </ul>
                                    <a class="close-overlay hidden">
                                        x
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="member-info wow fadeInUp">
                            <h4>John Visual</h4>
                            <h5 class="highlight">CEO / Founder</h5>
                            <p>Vivamus motestues phasellus enim sed orci eu pharetra. </p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 team-member">
                        <div class="effect effects wow fadeInUp">
                            <div class="img">
                                <img src="img/team/team-2.jpg" class="img-responsive" alt="" />
                                <div class="overlay">
                                    <ul class="expand">
                                        <li class="social-icon">
                                            <a href="#" onClick="return false;">
                                                <i class="icon-social-facebook"></i>
                                            </a>
                                        </li>
                                        <li class="social-icon">
                                            <a href="#" onClick="return false;">
                                                <i class="icon-social-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="social-icon">
                                            <a href="#" onClick="return false;">
                                                <i class=" icon-envelope-open"></i>
                                            </a>
                                        </li>
                                    </ul>
                                    <a class="close-overlay hidden">
                                        x
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="member-info wow fadeInUp">
                            <h4>John Visual</h4>
                            <h5 class="highlight">CEO / Founder</h5>
                            <p>Vivamus motestues phasellus enim sed orci eu pharetra.</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 team-member">
                        <div class="effect effects wow fadeInUp">
                            <div class="img">
                                <img src="img/team/team-3.jpg" class="img-responsive" alt="" />
                                <div class="overlay">
                                    <ul class="expand">
                                        <li class="social-icon">
                                            <a href="#" onClick="return false;">
                                                <i class="icon-social-facebook"></i>
                                            </a>
                                        </li>
                                        <li class="social-icon">
                                            <a href="#" onClick="return false;">
                                                <i class="icon-social-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="social-icon">
                                            <a href="#" onClick="return false;">
                                                <i class=" icon-envelope-open"></i>
                                            </a>
                                        </li>
                                    </ul>
                                    <a class="close-overlay hidden">
                                        x
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="member-info wow fadeInUp">
                            <h4>Jane Wunder</h4>
                            <h5 class="highlight">PR Manager</h5>
                            <p>Vivamus motestues phasellus enim sed orci eu pharetra.</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 team-member">
                        <div class="effect effects wow fadeInUp">
                            <div class="img">
                                <img src="img/team/team-4.jpg" class="img-responsive" alt="" />
                                <div class="overlay">
                                    <ul class="expand">
                                        <li class="social-icon">
                                            <a href="#" onClick="return false;">
                                                <i class="icon-social-facebook"></i>
                                            </a>
                                        </li>
                                        <li class="social-icon">
                                            <a href="#" onClick="return false;">
                                                <i class="icon-social-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="social-icon">
                                            <a href="#" onClick="return false;">
                                                <i class=" icon-envelope-open"></i>
                                            </a>
                                        </li>
                                    </ul>
                                    <a class="close-overlay hidden">
                                        x
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="member-info wow fadeInUp">
                            <h4>Ali Latukau</h4>
                            <h5 class="highlight">Web Developer</h5>
                            <p>Vivamus motestues phasellus enim sed orci eu pharetra.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Team Section -->

        <!-- Start Quote Section -->
        <section id="quote" class="parallax-section-6">
            <div class="container">
                <div class="row wow fadeInUp">
                    <div class="col-lg-12 wow fadeInUp" style="z-index:3">
                        <div id="quote-slider" class="owl-carousel">
                            <div>
                                <blockquote>
                                    <i class="icon-left ion-quote ion-2x highlight"></i>
                                    <span> The Difference between ordinary and extraordinary<br>
                                        is just that little extra! </span>
                                    <i class="icon-right ion-quote ion-2x highlight"></i>
                                </blockquote>
                                <h4 class="quote-author highlight">Visual Team</h4>
                            </div>
                            <div>
                                <blockquote>
                                    <i class="icon-left ion-quote ion-2x highlight"></i>
                                    <span> A Perfect Design is made with Passion, Dedication,<br>
                                        and a lots of Coffee! </span>
                                    <i class="icon-right ion-quote ion-2x highlight"></i>
                                </blockquote>
                                <h4 class="quote-author highlight">Visual Team</h4>
                            </div>
                            <div>
                                <blockquote>
                                    <i class="icon-left ion-quote ion-2x highlight"></i>
                                    <span> What separates design from art is that design is<br>
                                        meant to be... functional. </span>
                                    <i class="icon-right ion-quote ion-2x highlight"></i>
                                </blockquote>
                                <h4 class="quote-author highlight">Visual Team</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Quote Section -->

        <!-- Start Portfolio Section -->
        <section id="portfolio" style="position: relative;">
            <div class="separator"></div>
            <div class="container-fluid">
                <div class="col-md-12 text-center">
                    <h3 class="section-title wow fadeInUp">Greatest Works.</h3>
                    <p class="subheading wow fadeInUp">Creating products and services that <span
                            class="highlight">transform brands</span>.</p>
                </div>
                <div id="filters-container-fullwidth" class="cbp-l-filters-alignCenter wow fadeInUp">
                    <div data-filter="*" class="cbp-filter-item-active cbp-filter-item">All
                        <div class="cbp-filter-counter"></div>
                    </div>
                    <div data-filter=".identity" class="cbp-filter-item">Identity
                        <div class="cbp-filter-counter"></div>
                    </div>
                    <div data-filter=".web-design" class="cbp-filter-item">Web Design
                        <div class="cbp-filter-counter"></div>
                    </div>
                    <div data-filter=".graphic" class="cbp-filter-item">Graphic
                        <div class="cbp-filter-counter"></div>
                    </div>
                    <div data-filter=".logo" class="cbp-filter-item">Logo
                        <div class="cbp-filter-counter"></div>
                    </div>
                    <div data-filter=".motion" class="cbp-filter-item">Motion
                        <div class="cbp-filter-counter"></div>
                    </div>
                </div>
                <div id="grid-container-fullwidth" class="cbp-l-grid-fullScreen">
                    <ul>
                        <li class="cbp-item effect effects identity logo">
                            <div class="img">
                                <img src="img/portfolio/1.jpg" class="img-responsive" alt="" />
                                <div class="overlay">
                                    <ul class="expand">
                                        <li class="cbp-l-icon">
                                            <a href="img/portfolio/fullsize/1.jpg" class="cbp-lightbox"
                                                data-title="Dashboard<br>by Visual">
                                                <i class="icon-magnifier"></i>
                                            </a>
                                        </li>
                                        <li class="cbp-l-icon">
                                            <a href="projects/project1.html" class="cbp-singlePage">
                                                <i class="icon-link"></i>
                                            </a>
                                        </li>
                                        <li class="cbp-l-caption-title">Future Trend</li>
                                        <li class="cbp-l-caption-desc">by Visual Design</li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="cbp-item effect effects identity logo">
                            <div class="img">
                                <img src="img/portfolio/2.jpg" class="img-responsive" alt="" />
                                <div class="overlay">
                                    <ul class="expand">
                                        <li class="cbp-l-icon">
                                            <a href="img/portfolio/fullsize/2.jpg" class="cbp-lightbox"
                                                data-title="Dashboard<br>by Visual">
                                                <i class="icon-magnifier"></i>
                                            </a>
                                        </li>
                                        <li class="cbp-l-icon">
                                            <a href="projects/project2.html" class="cbp-singlePage">
                                                <i class="icon-link"></i>
                                            </a>
                                        </li>
                                        <li class="cbp-l-caption-title">Pro Bicycle</li>
                                        <li class="cbp-l-caption-desc">by Visual Design</li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="cbp-item effect effects web-design">
                            <div class="img">
                                <img src="img/portfolio/3.jpg" class="img-responsive" alt="" />
                                <div class="overlay">
                                    <ul class="expand">
                                        <li class="cbp-l-icon">
                                            <a href="img/portfolio/fullsize/3.jpg" class="cbp-lightbox"
                                                data-title="Dashboard<br>by Visual">
                                                <i class="icon-magnifier"></i>
                                            </a>
                                        </li>
                                        <li class="cbp-l-icon">
                                            <a href="projects/project3.html" class="cbp-singlePage">
                                                <i class="icon-link"></i>
                                            </a>
                                        </li>
                                        <li class="cbp-l-caption-title">Door Cover</li>
                                        <li class="cbp-l-caption-desc">by Visual Design</li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="cbp-item effect effects motion identity">
                            <div class="img">
                                <img src="img/portfolio/4.jpg" class="img-responsive" alt="" />
                                <div class="overlay">
                                    <ul class="expand">
                                        <li class="cbp-l-icon">
                                            <a class="cbp-lightbox" href="https://www.youtube.com/watch?v=3wbvpOIIBQA"
                                                data-title="Dashboard<br>by Visual">
                                                <i class="icon-magnifier"></i>
                                            </a>
                                        </li>
                                        <li class="cbp-l-icon">
                                            <a href="projects/project4.html" class="cbp-singlePage">
                                                <i class="icon-link"></i>
                                            </a>
                                        </li>
                                        <li class="cbp-l-caption-title">Pro Close-up</li>
                                        <li class="cbp-l-caption-desc">by Visual Design</li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="cbp-item effect effects identity">
                            <div class="img">
                                <img src="img/portfolio/5.jpg" class="img-responsive" alt="" />
                                <div class="overlay">
                                    <ul class="expand">
                                        <li class="cbp-l-icon">
                                            <a href="img/portfolio/fullsize/5.jpg" class="cbp-lightbox"
                                                data-title="Dashboard<br>by Visual">
                                                <i class="icon-magnifier"></i>
                                            </a>
                                        </li>
                                        <li class="cbp-l-icon">
                                            <a href="projects/project5.html" class="cbp-singlePage">
                                                <i class="icon-link"></i>
                                            </a>
                                        </li>
                                        <li class="cbp-l-caption-title">Bohemian Coding</li>
                                        <li class="cbp-l-caption-desc">by Visual Design</li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="cbp-item effect effects motion logo">
                            <div class="img">
                                <img src="img/portfolio/6.jpg" class="img-responsive" alt="" />
                                <div class="overlay">
                                    <ul class="expand">
                                        <li class="cbp-l-icon">
                                            <a href="https://www.youtube.com/watch?v=9No-FiEInLA" class="cbp-lightbox"
                                                data-title="Dashboard<br>by Visual">
                                                <i class="icon-magnifier"></i>
                                            </a>
                                        </li>
                                        <li class="cbp-l-icon">
                                            <a href="projects/project6.html" class="cbp-singlePage">
                                                <i class="icon-link"></i>
                                            </a>
                                        </li>
                                        <li class="cbp-l-caption-title">Poster Wall</li>
                                        <li class="cbp-l-caption-desc">by Visual Design</li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="cbp-item effect effects web-design">
                            <div class="img">
                                <img src="img/portfolio/7.jpg" class="img-responsive" alt="" />
                                <div class="overlay">
                                    <ul class="expand">
                                        <li class="cbp-l-icon">
                                            <a href="img/portfolio/fullsize/7.jpg" class="cbp-lightbox"
                                                data-title="Dashboard<br>by Visual">
                                                <i class="icon-magnifier"></i>
                                            </a>
                                        </li>
                                        <li class="cbp-l-icon">
                                            <a href="projects/project7.html" class="cbp-singlePage">
                                                <i class="icon-link"></i>
                                            </a>
                                        </li>
                                        <li class="cbp-l-caption-title">Red Bridge</li>
                                        <li class="cbp-l-caption-desc">by Visual Design</li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="cbp-item effect effects web-design">
                            <div class="img">
                                <img src="img/portfolio/8.jpg" class="img-responsive" alt="" />
                                <div class="overlay">
                                    <ul class="expand">
                                        <li class="cbp-l-icon">
                                            <a href="img/portfolio/fullsize/8.jpg" class="cbp-lightbox"
                                                data-title="Dashboard<br>by Visual">
                                                <i class="icon-magnifier"></i>
                                            </a>
                                        </li>
                                        <li class="cbp-l-icon">
                                            <a href="projects/project8.html" class="cbp-singlePage">
                                                <i class="icon-link"></i>
                                            </a>
                                        </li>
                                        <li class="cbp-l-caption-title">V8 M52 Engine</li>
                                        <li class="cbp-l-caption-desc">by Visual Design</li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="cbp-item effect effects identity motion">
                            <div class="img">
                                <img src="img/portfolio/9.jpg" class="img-responsive" alt="" />
                                <div class="overlay">
                                    <ul class="expand">
                                        <li class="cbp-l-icon">
                                            <a href="http://vimeo.com/16465813" class="cbp-lightbox"
                                                data-title="Dashboard<br>by Visual">
                                                <i class="icon-magnifier"></i>
                                            </a>
                                        </li>
                                        <li class="cbp-l-icon">
                                            <a href="projects/project9.html" class="cbp-singlePage">
                                                <i class="icon-link"></i>
                                            </a>
                                        </li>
                                        <li class="cbp-l-caption-title">Ergonomic Pad</li>
                                        <li class="cbp-l-caption-desc">by Visual Design</li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="cbp-item effect effects web-design graphic">
                            <div class="img">
                                <img src="img/portfolio/10.jpg" class="img-responsive" alt="" />
                                <div class="overlay">
                                    <ul class="expand">
                                        <li class="cbp-l-icon">
                                            <a href="img/portfolio/fullsize/10.jpg" class="cbp-lightbox"
                                                data-title="Dashboard<br>by Visual">
                                                <i class="icon-magnifier"></i>
                                            </a>
                                        </li>
                                        <li class="cbp-l-icon">
                                            <a href="projects/project10.html" class="cbp-singlePage">
                                                <i class="icon-link"></i>
                                            </a>
                                        </li>
                                        <li class="cbp-l-caption-title">Cooling Tower</li>
                                        <li class="cbp-l-caption-desc">by Visual Design</li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="cbp-item effect effects graphic logo">
                            <div class="img">
                                <img src="img/portfolio/11.jpg" class="img-responsive" alt="" />
                                <div class="overlay">
                                    <ul class="expand">
                                        <li class="cbp-l-icon">
                                            <a href="img/portfolio/fullsize/11.jpg" class="cbp-lightbox"
                                                data-title="Dashboard<br>by Visual">
                                                <i class="icon-magnifier"></i>
                                            </a>
                                        </li>
                                        <li class="cbp-l-icon">
                                            <a href="projects/project11.html" class="cbp-singlePage">
                                                <i class="icon-link"></i>
                                            </a>
                                        </li>
                                        <li class="cbp-l-caption-title">Still Motion</li>
                                        <li class="cbp-l-caption-desc">by Visual Design</li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="cbp-item effect effects graphic logo">
                            <div class="img">
                                <img src="img/portfolio/12.jpg" class="img-responsive" alt="" />
                                <div class="overlay">
                                    <ul class="expand">
                                        <li class="cbp-l-icon">
                                            <a href="img/portfolio/fullsize/12.jpg" class="cbp-lightbox"
                                                data-title="Dashboard<br>by Visual">
                                                <i class="icon-magnifier"></i>
                                            </a>
                                        </li>
                                        <li class="cbp-l-icon">
                                            <a href="projects/project12.html" class="cbp-singlePage">
                                                <i class="icon-link"></i>
                                            </a>
                                        </li>
                                        <li class="cbp-l-caption-title">Print Design</li>
                                        <li class="cbp-l-caption-desc">by Visual Design</li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="cbp-l-loadMore-button">
                    <a href="projects/loadMore.html" class="cbp-l-loadMore-button-link wow fadeInUp">
                        SHOW ME MORE
                    </a>
                    <!-- Portfolio AJAX load more button will be functional only on your server. Upload to your server when testing. -->
                </div>
            </div>
        </section>
        <!-- End Portfolio Section -->

        <!-- Start Get Connected -->
        <section id="services" class="parallax-section-9">
            <div class="container">
                <div class="col-md-12 text-center">
                    <h3 class="section-title wow fadeInUp">What we do.</h3>
                    <p class="subheading wow fadeInUp">We use <span class="highlight">our expertise</span> to extend
                        your brand.</p>
                </div>
                <div class="row features-row wow fadeInUp">
                    <div class="col-md-4 col-sm-12 feature-column">
                        <div class="feature-icon">
                            <i class="icon-eyeglasses size-2x highlight"></i>
                        </div>
                        <div class="feature-info">
                            <h4>Parallax Design</h4>
                            <p class="feature-description">Vivamus molestie phasellus enim sed orci eu pharetra. Donec
                                posuere nunc vitae tortor sagittis feugiat in non massa.</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 white feature-column">
                        <div class="feature-icon">
                            <i class="icon-lock-open size-2x highlight"></i>
                        </div>
                        <div class="feature-info">
                            <h4>Fully Responsive</h4>
                            <p class="feature-description">Vivamus molestie phasellus enim sed orci eu pharetra. Donec
                                posuere nunc vitae tortor sagittis feugiat in non massa.</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 white feature-column">
                        <div class="feature-icon">
                            <i class="icon-energy size-2x highlight"></i>
                        </div>
                        <div class="feature-info">
                            <h4>Fast & Smooth</h4>
                            <p class="feature-description">Vivamus molestie phasellus enim sed orci eu pharetra. Donec
                                posuere nunc vitae tortor sagittis feugiat in non massa.</p>
                        </div>
                    </div>
                </div>
                <div class="row features-row wow fadeInUp">
                    <div class="col-md-4 col-sm-12 feature-column">
                        <div class="feature-icon">
                            <i class="icon-eyeglasses size-2x highlight"></i>
                        </div>
                        <div class="feature-info">
                            <h4>Parallax Design</h4>
                            <p class="feature-description">Vivamus molestie phasellus enim sed orci eu pharetra. Donec
                                posuere nunc vitae tortor sagittis feugiat in non massa.</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 white feature-column">
                        <div class="feature-icon">
                            <i class="icon-lock-open size-2x highlight"></i>
                        </div>
                        <div class="feature-info">
                            <h4>Fully Responsive</h4>
                            <p class="feature-description">Vivamus molestie phasellus enim sed orci eu pharetra. Donec
                                posuere nunc vitae tortor sagittis feugiat in non massa.</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 white feature-column">
                        <div class="feature-icon">
                            <i class="icon-energy size-2x highlight"></i>
                        </div>
                        <div class="feature-info">
                            <h4>Fast & Smooth</h4>
                            <p class="feature-description">Vivamus molestie phasellus enim sed orci eu pharetra. Donec
                                posuere nunc vitae tortor sagittis feugiat in non massa.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Services Section -->

        <!-- Start Clients Section -->
        <section id="clients">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h3 class="section-title wow fadeInUp">Recent Clients.</h3>
                        <p class="subheading wow fadeInUp">Meet our clients, some of the most well known companies.</p>
                    </div>
                    <div class="clients">
                        <div id="client-slider" class="owl-carousel">
                            <div class="item">
                                <img src="img/clients/mta1.png" alt="" />
                            </div>
                            <div class="item">
                                <img src="img/clients/mim.png" alt="" />
                            </div>
                            <div class="item">
                                <img src="img/clients/pci.png" alt="" />
                            </div>
                            <div class="item">
                                <img src="img/clients/rni.png" alt="" />
                            </div>
                            <div class="item">
                                <img src="img/clients/itama.png" alt="" />
                            </div>
                            {{-- <div class="item">
                                <img src="img/clients/logo-6-dark.png" alt="" />
                            </div>
                            <div class="item">
                                <img src="img/clients/logo-7-dark.png" alt="" />
                            </div>
                            <div class="item">
                                <img src="img/clients/logo-8-dark.png" alt="" />
                            </div>
                            <div class="item">
                                <img src="img/clients/logo-9-dark.png" alt="" />
                            </div>
                            <div class="item">
                                <img src="img/clients/logo-10-dark.png" alt="" />
                            </div>
                            <div class="item">
                                <img src="img/clients/logo-11-dark.png" alt="" />
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Clients Section -->

        <!-- Start Call to Action 1 -->
        {{-- <section id="call-to-action-1">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h3 class="wow fadeInUp">FEEL LIKE WORKING WITH US?</h3>
                        <p class="wow fadeInUp">Vivamus a placerat ante. Duis vulputate nibh sit amet augue vehicula,
                            mattis ni<br>
                            viverra purus tristique. Proin commodo eu ipsum. </p>
                        <a href="#contact" class="btn btn-primary btn-scroll">
                            Get in Touch
                        </a>
                    </div>
                </div>
            </div>
        </section> --}}
        <!-- End Call to Action 1 -->

        <!-- Start Testimonials Section -->
        {{-- <section id="testimonials" class="parallax-section-4">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h3 class="section-title white wow fadeInUp">What clients say.</h3>
                        <p class="subheading grey wow fadeInUp">What People Say's About Us</p>
                    </div>
                    <div class="col-md-12 text-center wow fadeInUp">
                        <div id="owl-testimonials" class="owl-carousel">
                            <div>
                                <div class="testimonial">
                                    <i class="icon-left ion-quote ion-2x highlight"></i>
                                    <span> This guys are amazing! They were so quick to respond and let me tell you...
                                        they are all knowing!<br>
                                        I highly recommend their themes! They are all about making their clients happy.
                                    </span>
                                    <i class="icon-right ion-quote ion-2x highlight"></i>
                                </div>
                                <div class="testimonial-name">
                                    <img src="img/clients/client-1.png" alt="client">
                                    <h4 class="white">Jack Walles</h4>
                                    <a href="#">
                                        www.google.com
                                    </a>
                                </div>
                            </div>
                            <div>
                                <div class="testimonial">
                                    <i class="icon-left ion-quote ion-2x highlight"></i>
                                    <span> This one is undoubtedly the best template I ever bought! Easy to edit, nicely
                                        coded and I highly recommend it.<br>
                                        It's wonderful design and also very fast and excelent support. </span>
                                    <i class="icon-right ion-quote ion-2x highlight"></i>
                                </div>
                                <div class="testimonial-name">
                                    <img src="img/clients/client-2.png" alt="client">
                                    <h4 class="white">Jane Smith</h4>
                                    <a href="#">
                                        www.facebook.com
                                    </a>
                                </div>
                            </div>
                            <div>
                                <div class="testimonial">
                                    <i class="icon-left ion-quote ion-2x highlight"></i>
                                    <span> Visual is well documented and well coded, but the best of all is the friendly
                                        and quick support behind it.<br>
                                        Visual Design did a great and dedicated job. Thank you for this awesome theme!
                                    </span>
                                    <i class="icon-right ion-quote ion-2x highlight"></i>
                                </div>
                                <div class="testimonial-name">
                                    <img src="img/clients/client-3.png" alt="client">
                                    <h4 class="white">jonathan warton</h4>
                                    <a href="#">
                                        www.msn.com
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
        <!-- End Testimonials Section -->

        <!-- Start Contact Form Section -->
        <section id="contact">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h3 class="section-title wow fadeInUp">Contact us</h3>
                        <p class="subheading wow fadeInUp"> Let's Work Together. </p>
                    </div>
                    <div class="col-md-7 wow fadeInUp">
                        <div id="message"></div>
                        <!-- Contact Form will be functional only on your server. Upload to your server when testing. -->
                        <form method="post" action="php/contact-form.php.htm" name="contactform" id="contactform">
                            <fieldset>
                                <input name="name" type="text" id="name" placeholder="Name" />
                                <input name="email" type="text" id="email" placeholder="Email" />
                                <input name="subject" type="text" id="subject" placeholder="Subject" />
                            </fieldset>
                            <fieldset>
                                <textarea name="comments" cols="40" rows="3" id="comments"
                                    placeholder="Message"></textarea>
                            </fieldset>
                            <input type="submit" class="submit" id="submit" value="Send Message" />
                        </form>
                    </div>
                    <div class="col-md-5 wow fadeInLeft">
                        <h4> North America : </h4>
                        <address>
                            795 Folsom Ave, Suite 600<br>
                            San Francisco, CA 94107<br>
                            <abbr title="Phone">P:</abbr> (123) 456-7890
                        </address>
                        <h4> Europe : </h4>
                        <address>
                            795 Folsom Ave, Suite 600<br>
                            San Francisco, CA 94107<br>
                            <abbr title="Phone">P:</abbr> (123) 456-7890
                        </address>
                        <h4> Contact Us : </h4>
                        <address>
                            <abbr title="Phone">
                                <strong> Phone </strong>
                            </abbr> : (123) 456-7890 <br>
                            <abbr title="Fax">
                                <strong>Fax </strong>
                            </abbr> : (123) 456-7890 <br>
                            <abbr title="Email">
                                <strong>Email </strong>
                            </abbr> : (123) 456-7890
                        </address>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Contact Form Section -->

        <!-- Start Google Map Section -->
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.432047213476!2d106.6789146144944!3d-6.338043863776106!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69e541f1b85d67%3A0x5285d407610f03c8!2sPT%20ENESERS%20MITRA%20BERKAH!5e0!3m2!1sen!2sid!4v1679364988794!5m2!1sen!2sid"
            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
        <!-- End Google Map Section -->

        <!-- Start Footer 1 -->
        <footer id="footer">
            <!-- End Footer Widgets -->

            <div class="footer-copyright">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h3 class="section-title wow fadeInUp">PT. Enesers Mitra Berkah</h3>
                            <p class="wow fadeInUp"> All Rights Reserved. Copyright © 2023
                                {{-- <a href="#" target="_blank">Template Stock</a> --}}
                            </p>
                            <ul class="social-icons subheading">
                                <li>
                                    <a href="#">
                                        <i class="icon ion-social-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="icon ion-social-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="icon ion-social-googleplus"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="icon ion-social-instagram-outline"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="icon ion-social-pinterest"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="icon ion-social-skype"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="icon ion-social-linkedin"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="icon ion-social-dropbox"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="icon ion-social-vimeo"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="icon ion-social-youtube"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Footer Copyright -->

        </footer>
        <!-- End Footer 1 -->

        <!-- Start Back To Top -->
        <a id="back-to-top">
            <i class="icon ion-chevron-up"></i>
        </a>
        <!-- End Back To Top -->

    </div>
    <!-- End Site Wrapper -->
    <!-- jQuery -->
    <script type="text/javascript" src="{{ asset('js/plugins/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/plugins/moderniz.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/plugins/smoothscroll.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/no-ui-slider/jquery.nouislider.all.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/plugins/revslider.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/plugins/waypoints.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/plugins/parallax.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/plugins/easign1.3.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/plugins/cubeportfolio.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/plugins/owlcarousel.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/plugins/tweetie.min.js') }}"></script>
    <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js"></script>
    <script type="text/javascript" src="{{ asset('js/plugins/gmap3.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/plugins/wow.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/plugins/counterup.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/scripts.js') }}"></script>
</body>

</html>