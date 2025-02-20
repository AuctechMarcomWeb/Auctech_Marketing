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
                    <form action="https://consalpro.alexisnickcreates.com/submit-your-form-handler" method="post">
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
    <!-- Search Btn Start -->
    <div class="search-menu-container">
        <form action="#" method="GET">
            <input type="text" name="query" class="input-field" placeholder="Search...">
            <button type="submit" class="submit-btn">
                <i class="fas fa-search"></i>
            </button>
        </form>
        <button type="button" class="close-btn">
            <i class="fas fa-times"></i>
        </button>
    </div>
    <div class="search-menu-overlay">
    </div>
    <!-- Search Btn End -->
    <!-- About Start -->
    <div class="about-page body-black">
        <!-- Pages Heading Area Start -->
        <div class="pages-heading p-relative">
            <div class="pages-heading-image p-relative z-index-1">
                <img src="images/about/about-page-img.png" alt="">
            </div>
            <div class="pages-heading-text p-absolute z-index-1">
                <span>Home / MarCom Lab</span>
                <h2>MarCom Lab</h2>
            </div>
        </div>
        <!-- About Area Start  -->
        <div class="about-area body-black overflow-hidden mt-140 pb-140">
            <div class="container ">
                <div class="row">
                    <div class="col-xl-8 col-lg-8 col-md-8">
                        <div class="section-title mb-71 style-1">
                            <span class="mb-23">About Company <img src="images/icon/section-title-arrow.svg"
                                    alt=""></span>
                            <h2>Provide Best Business <br>Solutions</h2>
                        </div>
                        <div class="about-area-content-wrapper ">
                            <div class="about-area-contents-text ">
                                <p class="pra-text pb-75">
                                    Auctech Marcom is a global strategic management consulting group that serves leading businesses,
                                    multi-national companies, small and medium enterprises, NGO's and start-ups.
                                </p>
                            </div>
                            <div class="counter-area style-2 d-xl-flex d-lg-flex d-md-flex gap-90">
                                <div class="counter-area-wrapper">
                                    <span class="counter">48</span>
                                    <p>Expert Team Member</p>
                                </div>
                                <div class="counter-area-wrapper">
                                    <span class="counter">20</span><span>+</span>
                                    <p>Years Of Experience</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4">
                        <div class="about-area-side-img p-relative">
                            <img src="images/about/h2-side-bg-img.png" alt="">
                            <img class="side-img-part p-absolute" src="images/about/h2-side-bg-part.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About Area End  -->
    
        <!-- Why Choose Us Start   -->
        <div class="wcu-area body-black p-relative z-index-11 pb-140 ">
            <div class="container">
                <div class="row reverse">
                    <div class="col-xl-4">
                        <div class="wcu-area-page">
                            <div class="wcu-area-page-circle-img p-relative z-index-11">
                                <img src="images/why-choose-us/h2-circle-img.png" alt="">
                            </div>
                            <div class="wcu-area-page-img-content">
                                <img src="images/why-choose-us/h2-wcu-30shape.png" alt="">
                                <h3 class="mt-32">Years</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8">
                        <div class="section-title mb-60 style-1">
                            <span class="pb-15">Why Choose Us<img src="images/icon/section-title-arrow.svg"
                                    alt=""></span>
                            <h2>We Offer Comprehensive Services <br>Under One Roof</h2>
                        </div>
                        <div class="wcu-area-card-info wcu-area-card-info-secondary">
                            <div class="wcu-area-info-card-wrapper">
                                <h5>Innovative Product Development</h5>
                                <div class="title-border-3 mt-30 mb-30"></div>
                                <p>We help businesses create cutting-edge products with strategic expertise.</p>
                            </div>
                            <div class="wcu-area-info-card-wrapper">
                                <h5>Strategic Business Expansion</h5>
                                <div class="title-border-3 mt-30 mb-30"></div>
                                <p>Expand your business with seamless execution and industry insights.</p>
                            </div>
                            <div class="wcu-area-info-card-wrapper">
                                <h5>Data-Driven Decisions</h5>
                                <div class="title-border-3 mt-30 mb-30"></div>
                                <p>Leverage data and analytics to optimize efficiency and performance.</p>
                            </div>
                            <div class="wcu-area-info-card-wrapper">
                                <h5>Collaborate for the Future</h5>
                                <div class="title-border-3 mt-30 mb-30"></div>
                                <p>Partner with us to stay ahead in a fast-evolving marketplace.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Why Choose Us End   -->
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
                            <h3>Creative Consulting <br> and Development</h3>
                            <p>Creative consulting and development provide innovative to enhance brand identity
                                and growth.</p>
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
                            <h3>Web Design & Development</h3>
                            <p>Web Design & Development involves creating visually appealing and highly
                                functional websites.</p>
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
                            <h3>Advertising and Marketing Campaigns</h3>
                            <p>Advertising and marketing campaigns craft targeted messages to boost brand
                                visibility and engagement</p>
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
                            <p>Branding and identity design create a cohesive visual identity that defines and
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
       
        

        <!-- Text Marque Start !-->
        <div class="text-marque-area style-1 p-relative pt-59 pb-70  body-black">
            <div class="bg-light-color style-2"></div>
            <div class="text-marque-area-shape p-absolute">
                <img src="images/shape/home-1-brand-marq-ornament.png" alt="">
            </div>
            <div class="text-marque-section body-black style-one  overflow-hidden">
                <div class="text-marque-wrapper first-text-marque p-relative z-index-11">
                    <div class="single-text-marque d-flex">
                        <h2 class="text-marque-title-one mr-200">STRATEGY & CONSULTING</h2>
                        <h2 class="text-marque-title-one">STRATEGY & CONSULTING</h2>
                    </div>
                </div>
                <div class="text-marque-wrapper second-text-marque p-relative z-index-11">
                    <div class="single-text-marque d-flex">
                        <h2 class="text-marque-title-two mr-200">BRANDING & MARKETING</h2>
                        <h2 class="text-marque-title-two">BRANDING & MARKETING</h2>
                    </div>
                </div>                
            </div>
        </div>
        <!-- Text Marque End !-->
    </div>
    <!-- About End -->
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