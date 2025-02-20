<!DOCTYPE html>
<html dir="ltr" lang="zxx">

<head>
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta charset="utf-8" />
    <meta name="description" content="Auctech Marketing Pvt. Ltd." />
    <meta name="keywords" content="AuctechMarketingPvt.Ltd." />
    <meta name="author" content="Auctech Marketing Pvt. Ltd." />

    <title>Auctech Marketing Pvt. Ltd.</title>

    <link rel="icon" type="image/png" href="images/logo/favicon.png" />

    <link rel="stylesheet" href="css/font-main.css">
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&amp;display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <link rel="stylesheet" href="css/magnific-popup.min.css" />
    <link rel="stylesheet" href="css/slick.min.css" />
    <link rel="stylesheet" href="css/nice-select.min.css" />
    <link rel="stylesheet" href="css/animate.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <script src="js/jquery.min.js"></script>

</head>

<body>
    <!-- Preloader Start  -->
    <div id="preloader">
        <div id="preloader-status">
            <div id="wifi-loader">
                <svg viewBox="0 0 86 86" class="circle-outer">
                    <circle r="40" cy="43" cx="43" class="back"></circle>
                    <circle r="40" cy="43" cx="43" class="front"></circle>
                    <circle r="40" cy="43" cx="43" class="new"></circle>
                </svg>
                <svg viewBox="0 0 60 60" class="circle-middle">
                    <circle r="27" cy="30" cx="30" class="back"></circle>
                    <circle r="27" cy="30" cx="30" class="front"></circle>
                </svg>
                <div data-text="Loading..." class="text"></div>
            </div>
        </div>
    </div>
    <!-- Preloader End  -->
    <!-- Header Start -->
    <header id="header">
        <?php
        include('header.php');
        ?>
    </header>
    <!-- Header End -->
    <!-- Off Canvas Start  -->
    <div class="off-canvas-menu">
        <div class="off-canvas-menu-wrapper" style="background: #333333;">
            <div class="off-canvas-menu-header d-flex justify-content-between mb-40">
                <div class="logo">
                    <img src="images/logo/logo.png" alt="">
                </div>
                <div class="close-icon">
                    <i class="fa-solid fa-xmark"></i>
                </div>
            </div>
            <div class="content">
                <h4 class="mb-30 text-center">Get Appointment</h4>
                <div class="appatment-form">
                    <form action="#" method="post">
                        <input type="text" placeholder="Name" id="name" name="name" required>

                        <input type="email" id="email" name="email" placeholder="Email Address" required>

                        <textarea id="message" name="message" placeholder="Message" required></textarea>

                        <div class="appertment-btn">
                            <a href="#">Submit Now</a>
                        </div>
                    </form>
                </div>
                <div class="team-area-member-social-link offcanves-socail-icon  text-center mt-35">
                    <ul>
                        <li class="d-inline"><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                        <li class="d-inline"><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                        <li class="d-inline"><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                        <li class="d-inline"><a href="#"><i class="fa-solid fa-basketball"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="off-canvas-menu-overlay">
    </div>
    <!-- Off Canvas End  -->
    <!-- Main Start -->
    <main class="p-relative">
        <!-- Hero Start -->
        <div class="hero-area p-relative body-black pt-36 z-index-1">
            <img class="hero-area-bg-one p-absolute" src="images/shape/hero-1-dawn-shape-1.png" alt="">
            <img class="hero-area-bg-four p-absolute" src="images/shape/hero-1-ornament-4.png" alt="">
            <img class="hero-area-bg-block-shape p-absolute" src="images/shape/hero-1-block-shape.png" alt="">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-area-title p-relative z-index-99">
                            <h1 class="hero-area-title-one">Provide Best <br> <span>Business </span></h1>
                            <h1 class="hero-area-title-two">Solutions</h1>
                        </div>
                    </div>
                </div>
            </div>

            <div class="hero-area-slider-part p-relative z-index-11">
                <div class="container-fluid gx-0">
                    <div class="row gx-0">
                        <div class="col-12 col-xl-8 col-lg-8 col-md-12 p-0">
                            <div class="hero-area-slider-section hero-slider-active p-relative z-index-11">
                                <?php
                                include('db_con.php');
                                $result = $con->query("SELECT image_path, title FROM add_banner");

                                while ($row = $result->fetch_assoc()):
                                    ?>
                                <div class="hero-area-slider-wrapper p-relative z-index-11">
                                    <div class="hero-area-slider-image">
                                        <img src="admin/<?php echo ($row['image_path']); ?>" alt="">
                                    </div>
                                    <div class="hero-area-slider-inner-text p-absolute">
                                        <p class="hero-area-slider-text-1 mb-13">We Provide</p>
                                        <h3 class="hero-area-slider-text-2 mb-17"><?php echo ($row['title']); ?></h3>
                                        <div class="title-border-1"></div>
                                    </div>
                                </div>
                                <?php endwhile; ?>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 ">
                            <div class="hero-area-author-Wrapper pr-70 pl-130">
                                <p class="text-justify">Auctech Marcom is a global strategic management consulting group
                                    that serves leading
                                    businesses, <br> multi-national companies, small and medium enterprises, NGO's and
                                    start-ups.</p>
                                <div class="title-border-2 mb-42 mt-32">
                                </div>
                                <p class="text-justify">We help our clients by result-oriented cutting-edge solutions.
                                    Auctech Marcom with
                                    its unique business model serves the clients by catering to cross functional
                                    consulting and marketing requirements.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero End -->
        <!-- Text Marque Start !-->
        <div class="text-marque-area brand-marque-area-primary style-1 p-relative pt-59 pb-70  body-black">
            <div class="bg-light-color style-2"></div>
            <div class="text-marque-area-shape p-absolute">
                <img src="images/shape/home-1-brand-marq-ornament.png" alt="">
            </div>
            <div class="text-marque-section body-black style-one  overflow-hidden">
                <div class="text-marque-wrapper first-text-marque p-relative z-index-11">
                    <div class="single-text-marque d-flex">
                        <h2 class="text-marque-title-one mr-200">WEB DEVELOPMENT</h2>
                        <h2 class="text-marque-title-one">CREATIVE DESIGN</h2>
                    </div>
                </div>
                <div class="text-marque-wrapper second-text-marque p-relative z-index-11">
                    <div class="single-text-marque d-flex">
                        <h2 class="text-marque-title-two mr-200">CUSTOMIZE SOFTWARE</h2>
                        <h2 class="text-marque-title-two">ANDROID/IOS MOBILE APPS</h2>
                    </div>
                </div>
            </div>
        </div>
        <!-- Text Marque End !-->
        <!-- Gallery-area Start -->
        <div class="gallery-area body-black p-relative pb-140">
            <div class="gallery-area-bg-shape tilt-animate p-absolute">
                <img src="images/shape/home-1-gellary-bg-shape.png" alt="">
            </div>
            <div class="container-fluid gx-0">
                <div
                    class="gallery-area-wrapper p-relative z-index-11 d-xl-flex d-lg-flex d-md-flex  justify-content-center gap-20 mr-102">
                    <div class="gallery-area-content ">
                        <div class="gallery-area-image">
                            <div class="gallery-area-big-img tilt-animate mb-37">
                                <img src="images/gallery/home-1-gellary-bg-1.png" alt="">
                            </div>
                            <div class="gallery-area-info d-xl-flex d-lg-flex d-md-flex align-content-center gap-36">
                                <div class="shape-img ">
                                    <img src="images/gallery/home-1-gellary-bg-4.png" alt="">
                                </div>
                                <div class="gallery-area-text">
                                    <h2>Years</h2>
                                    <h6>Experience</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="gallery-area-content d-sm-flex justify-content-sm-center">
                        <div class="gallery-area-image tilt-animate">
                            <img class="gallery-area-image-1" src="images/gallery/home-1-gellary-bg-2.png" alt="">
                        </div>
                    </div>
                    <div class="gallery-area-content d-xl-block d-lg-block d-md-none">
                        <div class="gallery-area-image-shape tilt-animate p-relative mb-40">
                            <img class="shape-1 p-absolute" src="images/shape/home-1-gellary-shape-1.png" alt="">
                            <img class="shape-2" src="images/shape/home-1-gellary-shape-2.png" alt="">
                        </div>
                        <div class="gallery-area-image tilt-animate">
                            <img class="gallery-area-image-none" src="images/gallery/home-1-gellary-bg-3.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Gallery-area End -->

        <!-- About-Area-Start -->
        <div class="about-area  pb-140 p-relative body-black ">
            <div class="about-area-bg-shape p-absolute">
                <img src="images/shape/home-1-about-shape.png" alt="shape">
            </div>
            <div class="about-area-bg-topographic p-absolute">
                <img src="images/shape/home-1-about-topographic-1.png" alt="topographic-1">
            </div>
            <div class="bg-light-color style-3 ">
            </div>
            <div class="bg-light-color style-4 ">
            </div>
            <div class="container">
                <div class="about-area-info mb-143 p-relative d-lg-flex justify-content-lg-center z-index-11">
                    <div class="about-area-wrapper ml-330 p-relative z-index-11">
                        <div class="section-title mb-32 style-1">
                            <span class="mb-15">About Auctech MarCom <img src="images/icon/section-title-arrow.svg"
                                    alt=""></span>
                            <h2>Provide Best
                                <br>Business
                                Solutions
                            </h2>
                        </div>
                        <div class="about-area-text ml-110 mr-104">
                            <p class="mb-11 text-justify">Auctech Marcom works tirelessly on value creation by
                                substantially
                                enhancing the perceived benefits through extremely high quality output while optimizing
                                the cost at the same time. We achieve this by keeping our overheads low and leveraging
                                people, processes and technology to deliver extremely high quality service. This mantra
                                gives us the required competitive edge not just globally but in the developing economies
                                as well. We have worked with 125+ brands across the globe and are proud to have one of
                                the finest retention rates of clients in the industry. We will keep you hooked!</p>
                        </div>
                    </div>
                </div>
                <div class="about-area-main-part pt-54 p-relative z-index-11        pb-80">
                    <div class="about-card-bg-topographic p-absolute">
                        <img src="images/shape/home-1-about-topographic-2.png" alt="topographic-2">
                    </div>
                    <div class="about-area-heading pb-60">
                        <div
                            class="about-area-heading-part d-flex justify-content-center text-center align-items-center gap-38 mb-8">
                            <h2><span>Unique</span> Ideas</h2>
                            <img class="about-area-inner-img" src="images/about/home-1-bg.png" alt="">
                        </div>
                        <div
                            class="about-area-heading-part d-flex justify-content-center text-start align-items-center  gap-25">
                            <a href="#"><img src="images/icon/about-up-arrow.svg" alt=""></a>
                            <h2>For Your <span>Business.</span></h2>
                        </div>
                    </div>

                    <div class="about-area-card-section d-xl-grid d-lg-grid d-md-grid justify-content-center">
                        <div class="about-card-area">
                            <div class="card-wrapper style-1">
                                <div class="card-text mb-35">
                                    <h3>Web Design & Development</h3>
                                    <p class="text-justify">Web Design & Development involves creating visually
                                        appealing and highly
                                        functional websites.</p>
                                </div>
                                <div class="card-content d-flex justify-content-between align-items-center">
                                    <div class="arrow-icon">
                                        <a href="#"><img src="images/icon/about-up-arrow.svg" alt=""></a>
                                    </div>
                                    <span>01</span>
                                </div>
                            </div>
                        </div>
                        <div class="about-card-area">
                            <div class="card-wrapper style-1">
                                <div class="card-text mb-35">
                                    <h3>Advertising and Marketing Campaigns</h3>
                                    <p class="text-justify">Advertising and marketing campaigns craft targeted messages
                                        to boost brand
                                        visibility and engagement</p>
                                </div>
                                <div class="card-content d-flex justify-content-between align-items-center">
                                    <div class="arrow-icon">
                                        <a href="#"><img src="images/icon/about-up-arrow.svg" alt=""></a>
                                    </div>
                                    <span>02</span>
                                </div>
                            </div>
                        </div>
                        <div class="about-card-area">
                            <div class="card-wrapper style-1">
                                <div class="card-text mb-35">
                                    <h3>Creative Consulting <br> and Development</h3>
                                    <p class="text-justify">Creative consulting and development provide innovative to
                                        enhance brand identity
                                        and growth.</p>
                                </div>
                                <div class="card-content d-flex justify-content-between align-items-center">
                                    <div class="arrow-icon">
                                        <a href="#"><img src="images/icon/about-up-arrow.svg" alt=""></a>
                                    </div>
                                    <span>03</span>
                                </div>
                            </div>
                        </div>
                        <div class="about-card-area">
                            <div class="card-wrapper style-1">
                                <div class="card-text mb-35">
                                    <h3>Branding and <br> Identity Design</h3>
                                    <p class="text-justify">Branding and identity design create a cohesive visual
                                        identity that defines and
                                        differentiates brands.</p>
                                </div>
                                <div class="card-content d-flex justify-content-between align-items-center">
                                    <div class="arrow-icon">
                                        <a href="#"><img src="images/icon/about-up-arrow.svg" alt=""></a>
                                    </div>
                                    <span>04</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About-Area-End -->
        <!-- Why-choose-us-area start -->
        <div class="wcu-area style-1 pb-206 pt-196 body-black"
            style="background-image: url(images/why-choose-us/why-choose-us-bg.png); background-position: center; background-repeat: no-repeat;">
            <div class="container">
                <div class="row ">
                    <div class="col-xl-5">
                        <div class="wcu-area-info">
                            <div class="wcu-area-wrapper">
                                <div class="section-title mb-30 style-1">
                                    <span class="pb-15">Why Choose Us<img src="images/icon/section-title-arrow.svg"
                                            alt=""></span>
                                    <h2>We Provide Services <br> In One Places</h2>
                                </div>
                                <div class="wcu-area-text mr-75 ">
                                    <h5 class="mb-20 text-justify">Auctech always try to provide the best Business
                                        Solutions for
                                        Clients to grow up their Business sharply and smoothly.</h5>
                                    <p class="text-justify">We help our clients by result-oriented cutting-edge
                                        solutions. Auctech Marcom
                                        with its unique business model serves the clients by catering to cross
                                        functional consulting and marketing requirements. </p>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-7">
                        <div
                            class="counter-area style-1 d-xl-flex d-lg-flex d-md-flex justify-content-between flex-wrap gap-60 pl-20">
                            <div class="counter-area-wrapper">
                                <span class="counter">50</span><span>+</span>
                                <p>Expert Team Member</p>
                            </div>
                            <div class="counter-area-wrapper">
                                <span class="counter">20</span><span>+</span>
                                <p>Years Of Experience</p>
                            </div>
                            <div class="counter-area-wrapper">
                                <span class="counter">25</span>
                                <p>Software Solutions</p>
                            </div>
                            <div class="counter-area-wrapper">
                                <span class="counter">1</span><span>K</span>
                                <p>Project’s Complete</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Why-choose-us-area End -->
        <!-- Portfolio-area-start -->
        <div class="portfolio-area body-black pb-140 ">
            <div class="container">
                <div class="section-title mb-60 style-1 ">
                    <span class="mb-15">portfolio <img src="images/icon/section-title-arrow.svg" alt=""></span>
                    <h2>Our latest Awesome <br>Designs</h2>
                </div>
                <div class="row">
                    <div class="col-xl-5 col-lg-5 col-md-5">
                        <div class="portfolio-area-wrapper ">
                            <div class="portfolio-area-img tilt-animate mb-30">
                                <img src="images/portfolio/home-1-portfolio-bg-1.png" alt="">
                            </div>
                            <div class="portfolio-area-info">
                                <span>Brand , Photography</span>
                                <div
                                    class="portfolio-area-content d-flex align-items-end justify-content-between pb-23">
                                    <h4>CLASSIC CONCRETE <br> PLANTERS</h4>
                                    <a href="#"><img src="images/icon/home-1-up-arrwo-bold.svg" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-7 col-md-7">
                        <div class="portfolio-area-wrapper mb-45 p-relative z-index-11">
                            <div class="portfolio-area-img tilt-animate mb-30">
                                <img src="images/portfolio/home-1-portfolio-bg-2.png" alt="">
                            </div>
                            <div class="portfolio-area-info">
                                <span>Brand , Photography</span>
                                <div
                                    class="portfolio-area-content d-flex align-items-end justify-content-between pb-23">
                                    <h4>CLASSIC CONCRETE <br> PLANTERS</h4>
                                    <a href="#"><img src="images/icon/home-1-up-arrwo-bold.svg" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-7 col-md-7">
                        <div class="portfolio-area-wrapper mb-58">
                            <div class="portfolio-area-img tilt-animate mb-30">
                                <img src="images/portfolio/home-1-portfolio-bg-3.png" alt="">
                            </div>
                            <div class="portfolio-area-info">
                                <span>Brand , Photography</span>
                                <div
                                    class="portfolio-area-content d-flex align-items-end justify-content-between pb-23">
                                    <h4>CLASSIC CONCRETE <br> PLANTERS</h4>
                                    <a href="#"><img src="images/icon/home-1-up-arrwo-bold.svg" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-5 col-md-5">
                        <div class="portfolio-area-wrapper">
                            <div class="portfolio-area-img tilt-animate mb-30">
                                <img src="images/portfolio/home-1-portfolio-bg-4.png" alt="">
                            </div>
                            <div class="portfolio-area-info">
                                <span>Brand , Photography</span>
                                <div
                                    class="portfolio-area-content d-flex align-items-end justify-content-between pb-23">
                                    <h4>CLASSIC CONCRETE <br> PLANTERS</h4>
                                    <a href="#"><img src="images/icon/home-1-up-arrwo-bold.svg" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="portfolio-area-btnn d-flex justify-content-center pb-60">
                <a href="#">
                    <span class="mr-14 ">View Portfolio</span>
                    <img src="images/icon/section-title-arrow.svg" alt="">
                </a>
            </div>

        </div>
        <!-- Portfolio-area-end -->

        <!-- Team-area Start -->
        <div class="team-area body-black p-relative pb-140">
            <div class="container">
                <div class="bg-light-color style-5">
                </div>
                <div class="section-title style-2 mb-63">
                    <span class="pb-15">Member<img src="images/icon/section-title-arrow.svg" alt=""></span>
                    <h2>Awards Of Our Team </h2>
                </div>
                <div class="row gx-0 p-relative z-index-11">
                    <div class="col-xl-6 col-lg-6 p-0">
                        <div class="team-area-member-info-1 pb-65">
                            <div
                                class="team-area-member-info-wrapper p-relative z-index-11 d-flex align-items-center gap-40">
                                <div class="team-area-member-img tilt-zoom">
                                    <img src="images/team/home-1-team-1.png" alt="">
                                </div>
                                <div class="team-area-member-text">
                                    <h4>Cameron Williamson</h4>
                                    <p>CEO</p>
                                    <div class="team-area-member-social-link mt-15">
                                        <ul>
                                            <li class="d-inline"><a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                            </li>
                                            <li class="d-inline"><a href="#"><i class="fa-brands fa-twitter"></i></a>
                                            </li>
                                            <li class="d-inline"><a href="#"><i
                                                        class="fa-brands fa-linkedin-in"></i></a></li>
                                            <li class="d-inline"><a href="#"><i class="fa-solid fa-basketball"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 p-0">
                        <div class="team-area-member-info-2 pb-65 pl-120">
                            <div class="team-area-member-info-wrapper d-flex align-items-center gap-40">
                                <div class="team-area-member-img tilt-zoom">
                                    <img src="images/team/home-1-team-4.png" alt="">
                                </div>
                                <div class="team-area-member-text">
                                    <h4>Arlene McCoy</h4>
                                    <p>General Manager</p>
                                    <div class="team-area-member-social-link mt-15">
                                        <ul>
                                            <li class="d-inline"><a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                            </li>
                                            <li class="d-inline"><a href="#"><i class="fa-brands fa-twitter"></i></a>
                                            </li>
                                            <li class="d-inline"><a href="#"><i
                                                        class="fa-brands fa-linkedin-in"></i></a></li>
                                            <li class="d-inline"><a href="#"><i class="fa-solid fa-basketball"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div></div>
                    <div class="col-xl-6 col-lg-6 p-0">
                        <div class="team-area-member-info-3 pt-55">
                            <div class="team-area-member-info-wrapper d-flex align-items-center gap-40">
                                <div class="team-area-member-img tilt-zoom">
                                    <img src="images/team/home-1-team-3.png" alt="">
                                </div>
                                <div class="team-area-member-text">
                                    <h4>Theresa Webb</h4>
                                    <p>Vice President</p>
                                    <div class="team-area-member-social-link mt-15">
                                        <ul>
                                            <li class="d-inline"><a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                            </li>
                                            <li class="d-inline"><a href="#"><i class="fa-brands fa-twitter"></i></a>
                                            </li>
                                            <li class="d-inline"><a href="#"><i
                                                        class="fa-brands fa-linkedin-in"></i></a></li>
                                            <li class="d-inline"><a href="#"><i class="fa-solid fa-basketball"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 p-0">
                        <div class="team-area-member-info-4 pt-55 pl-120">
                            <div class="team-area-member-info-wrapper d-flex align-items-center gap-40">
                                <div class="team-area-member-img tilt-zoom">
                                    <img src="images/team/home-1-team-2.png" alt="">
                                </div>
                                <div class="team-area-member-text">
                                    <h4>Jacob Jones</h4>
                                    <p>Directors</p>
                                    <div class="team-area-member-social-link mt-15">
                                        <ul>
                                            <li class="d-inline"><a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                            </li>
                                            <li class="d-inline"><a href="#"><i class="fa-brands fa-twitter"></i></a>
                                            </li>
                                            <li class="d-inline"><a href="#"><i
                                                        class="fa-brands fa-linkedin-in"></i></a></li>
                                            <li class="d-inline"><a href="#"><i class="fa-solid fa-basketball"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team-area End -->
        <!-- Video-popup-area Start -->
        <div class="video-popup-area pt-270 pb-270"
            style="background-image: url(images/video-popup/video-popup-bg.png); background-position: center;">
            <div class="video-popup-area-wrapper p-relative z-index-1">
                <div class="video-popup-area-img d-flex align-items-center justify-content-center">
                    <img class="" src="images/shape/home-1-video-popup-shape.png" alt="">
                </div>
                <div class="video-popup-area-text p-absolute">
                    <h4><a class="mfp-iframe video-play" href="https://www.youtube.com/watch?v=SZEflIVnhH8">Play</a>
                    </h4>
                </div>
            </div>
        </div>
        <!-- Video-popup-area End -->
        <!-- Testimonial-area Start -->
        <div class="testimonial-area body-black style-1 p-relative z-index-11">
            <div class="container-fluid">
                <div class="row gx-1">
                    <div class="col-xl-6 col-lg-5 col-md-6">
                        <div class="testimonial-area-img-content ml-127">
                            <img src="images/testimonial/home-1-testimonial-img-1.png" alt="">
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-7">
                        <div class="testimonial-area-main-slider ">
                            <div class="testimonial-area-slider-wrapper">
                                <div class="fast-slider testimonial-active-slider">
                                    <?php
                                    include('db_con.php');
                                    $result = $con->query("SELECT name, review, designation, image_path FROM add_testimonial");
                                    while ($row = $result->fetch_assoc()):
                                    ?>
                                    <div class="slider-image d-flex justify-content-center">
                                        <img src="admin/<?php echo $row['image_path']; ?>" alt="Testimonial image">
                                    </div>
                                    <?php endwhile; ?>
                                </div>

                                <div class="second-slider testimonial-active-slider-nav mt-25">
                                    <?php
                                    $result->data_seek(0);
                                    while ($row = $result->fetch_assoc()):
                                    ?>
                                    <div class="slider-wrapper">
                                        <div class="slider-pra mb-15">
                                            <p><?php echo $row['review']; ?></p>
                                        </div>
                                        <div class="slider-info d-flex justify-content-between">
                                            <div class="slider-info-text">
                                                <h5 class="mb-8"><?php echo $row['name']; ?></h5>
                                                <span><?php echo $row['designation']; ?></span>
                                            </div>
                                            <span class="icon-quote"></span>
                                        </div>
                                    </div>
                                    <?php endwhile; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial-area End -->
        <!-- Blog & News Area Start -->
        <div class="blog-area body-black pb-140">
            <div class="container">
                <div class="section-title mb-63 style-2">
                    <span class="pb-15">Blog & News<img src="images/icon/section-title-arrow.svg" alt=""></span>
                    <h2>Our Latest News & Blog Get <br> Every Updates </h2>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-4">
                        <div class="blog-area-card d-md-flex justify-content-center" id="card-1">
                            <div class="blog-area-card-wrapper">
                                <span class="mb-20">February - 22th 2024</span>
                                <h5 class="mb-20">Will you be attending Affiliate Summit Europe?</h5>
                                <p class="hidden-card">I have been a loyal customer of this auto parts company for years
                                    and I cannot recommend them enough. Their extensive selection.</p>
                                <div class="card-image mt-20 p-relative">
                                    <img class="blog-main-img" src="images/blog/home-1-blog-img-1.png" alt="">
                                    <div class="blog-area-icon-img p-absolute">
                                        <a href="#"><img src="images/icon/home-1-blog-awrro.svg" alt=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4">
                        <div class="blog-area-card" id="card-2">
                            <div class="blog-area-card-wrapper">
                                <span class="mb-20">February - 22th 2024</span>
                                <h5 class="mb-20">Will you be attending Affiliate Summit Europe?</h5>
                                <p class="visible-card">I have been a loyal customer of this auto parts company for
                                    years and I cannot recommend them enough. Their extensive selection.</p>
                                <div class="card-image mt-20 p-relative">
                                    <img class="blog-main-img" src="images/blog/home-1-blog-img-2.png" alt="">
                                    <div class="blog-area-icon-img p-absolute">
                                        <a href="#"><img src="images/icon/home-1-blog-awrro.svg" alt=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4">
                        <div class="blog-area-card d-md-flex justify-content-center" id="card-3">
                            <div class="blog-area-card-wrapper">
                                <span class="mb-20">February - 22th 2024</span>
                                <h5 class="mb-20">Will you be attending Affiliate Summit Europe?</h5>
                                <p class="hidden-card">I have been a loyal customer of this auto parts company for years
                                    and I cannot recommend them enough. Their extensive selection.</p>
                                <div class="card-image mt-20 p-relative">
                                    <img class="blog-main-img" src="images/blog/home-1-blog-img-3.png" alt="">
                                    <div class="blog-area-icon-img p-absolute">
                                        <a href="#"><img src="images/icon/home-1-blog-awrro.svg" alt=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Blog & News Area End -->
        <!-- Brand Marquee Start -->
        <div class="brand-marque-area brand-marque-area-primary body-black overflow-hidden">
            <div class="brand-marque-wrapper marquee-active first-text-marque">
                <div class="single-img-marque">
                    <img src="images/brand-marque/home-1-brand-marque-1.png" alt="">
                </div>
                <div class="single-img-marque">
                    <img src="images/brand-marque/home-1-brand-marque-2.png" alt="">
                </div>
                <div class="single-img-marque">
                    <img src="images/brand-marque/home-1-brand-marque-3.png" alt="">
                </div>
                <div class="single-img-marque">
                    <img src="images/brand-marque/home-1-brand-marque-4.png" alt="">
                </div>
                <div class="single-img-marque">
                    <img src="images/brand-marque/home-1-brand-marque-1.png" alt="">
                </div>
                <div class="single-img-marque">
                    <img src="images/brand-marque/home-1-brand-marque-2.png" alt="">
                </div>
                <div class="single-img-marque">
                    <img src="images/brand-marque/home-1-brand-marque-3.png" alt="">
                </div>
                <div class="single-img-marque">
                    <img src="images/brand-marque/home-1-brand-marque-4.png" alt="">
                </div>
            </div>
        </div>
        <!-- Brand Marquee End -->
    </main>
    <!-- Main End -->
    <!-- Footer Start -->
    <footer id="footer">
        <?php
        include('footer.php');
        ?>
    </footer>
    <!-- Scroll Up Section Start -->
    <div id="scrollTop" class="scrollup-wrapper">
        <div class="scrollup-btn">
            <i class="fa-solid fa-chevron-up"></i>
        </div>
    </div>
    <!-- Scroll Up Section End -->
    <!-- Footer End -->

    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/waypoints.js"></script>
    <script src="js/jquery.meanmenu.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/inview.min.js"></script>
    <script src="js/wow.js"></script>
    <script src="js/tilt.jquery.js"></script>
    <script src="js/isotope.min.js"></script>
    <script src="js/jquery.imagesloaded.min.js"></script>
    <script src="js/custom.js"></script>

</body>

</html>