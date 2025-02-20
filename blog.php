<!DOCTYPE html>
<html dir="ltr" lang="zxx">
<head>
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta charset="utf-8" />
    <meta name="description" content="SwiftBiz - " />
    <meta name="keywords"
        content="delivery, item transport, logistics, product delivery, product transport, shipping, supply, transport, transport agency, transportation" />
    <meta name="author" content="ConsalPro" />

    <title>ConsalPro - Web Design Agency Figma Template</title>

    <link rel="icon" type="image/png" href="images/logo/favicon.png" />

    <link rel="stylesheet" href="css/font-main.css">
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&amp;display=swap" rel="stylesheet">
    
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
                    <img src="images/logo/header-logo.png" alt="">
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
        <form action="https://consalpro.alexisnickcreates.com/search" method="GET">
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
    <!-- Blog-Details Star -->
    <div class="blog-details body-black ">
        <div class="pages-heading p-relative">
            <div class="pages-heading-image p-relative z-index-1">
                <img src="images/pricing/pricing-page-header-img.png" alt="">
            </div>
            <div class="pages-heading-text style-2 p-absolute z-index-1">
                <span>Home / Will you be attending Affiliate Summit Europe? </span>
                <h2>Will you be attending Affiliate Summit Europe? </h2>
            </div>
        </div>
        <div class="blog-details-area pt-140">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-8">
                        <div class="blog-details-main-part">
                            <div class="blog-details-main-content">
                                <div class="blog-details-content-img tilt-animate">
                                    <img src="images/blog/block-page/blog-details-img.png" alt="">
                                </div>
                                <div class="blog-details-content-pra">
                                    <div class="data mt-30">February - 22th 2024</div>
                                    <div class="blog-details-content-main-pra d-flex align-items-center">
                                        <span>S</span>
                                        <p>Suspendisse sit amet neque euismod, convallis quam eget, dignissim massa. Aliquam blandit risus purus, in congue nunc venenatis id. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                                    </div>
                                    <div class="blog-detils-content-pra-3 mb-50 ml-8">
                                        <p>Proin efficitur, mauris vel condimentum pulvinar, velit orci consectetur ligula, eget egestas magna mi ut arcu. Phasellus nec odio orci. Nunc id massa ante. Suspendisse sit amet neque euismod, convallis quam eget, dignissim massa. Aliquam blandit risus purus, in congue nunc venenatis id. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Integer nec quam ut tortor efficitur consectetur sed vitae nisi. Phasellus convallis vulputate euismod. Pellentesque lacinia rutrum libero, sit amet aliquam ante viverra a. Ut sem ipsum, tempor nec rutrum in, gravida eu ipsum.</p>
                                    </div>
                                    <div class="blog-details-slider blog-page-active-slider">
                                        <div class="slider-wrapper d-flex">
                                            <div class="slider-icon">
                                                <span class="icon-quote1"></span>
                                            </div>
                                            <div class="slider-title">
                                                <h4 class="mb-12">Proin efficitur, mauris vel condimentum pulvinar, velit orci consectetur</h4>
                                                <p>Arlene McCoy</p>
                                            </div>
                                        </div>
                                        <div class="slider-wrapper d-flex">
                                            <div class="slider-icon">
                                                <span class="icon-quote1"></span>
                                            </div>
                                            <div class="slider-title">
                                                <h4 class="mb-12">Proin efficitur, mauris vel condimentum pulvinar, velit orci consectetur</h4>
                                                <p>Arlene McCoy</p>
                                            </div>
                                        </div>
                                        <div class="slider-wrapper d-flex">
                                            <div class="slider-icon">
                                                <span class="icon-quote1"></span>
                                            </div>
                                            <div class="slider-title">
                                                <h4 class="mb-12">Proin efficitur, mauris vel condimentum pulvinar, velit orci consectetur</h4>
                                                <p>Arlene McCoy</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="blog-details-content-pra-2 mb-52">
                                        <p> Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Integer nec quam ut tortor efficitur consectetur sed vitae nisi. Phasellus convallis vulputate euismod. Pellentesque lacinia rutrum libero, sit amet aliquam ante viverra a. Ut sem ipsum, tempor nec rutrum in, gravida eu ipsum.</p>
                                    </div>
                                </div>
                                <div class="blog-details-post-part mb-100">
                                    <div class="blog-details-post-img d-flex gap-22">
                                        <img class="tilt-animate" src="images/blog/block-page/blog-details-solution-img-1.png" alt="">
                                        <img class="tilt-animate" src="images/blog/block-page/blog-details-solution-img-2.png" alt="">
                                    </div>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4">
                        <div class="author-card p-relative z-index-11">
                            <div class="author-card-img tilt-zoom">
                                <img src="images/blog/block-page/block-details-side-img.png" alt="">
                            </div>
                            <div class="team-area-member-text text-center">
                                <h4 >Auctech Marcom</h4>
                                <p>Auctech always try to provide the best Business Solutions for Clients to grow up their Business sharply and smoothly.</p>
                                <div class="team-area-member-social-link mt-15">
                                    <ul>
                                        <li class="d-inline"><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                        <li class="d-inline"><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                        <li class="d-inline"><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                        
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        <div class="blog-details-news mb-89">
                            <h5>Recent News</h5>
                            <div class="title-border-3"></div>
                            <div class="blog-details-news-content mt-30">
                                <div class="blog-details-news-content-wrapper d-flex gap-30 mb-20">
                                    <div class="blog-details-news-img tilt-zoom">
                                        <img src="images/blog/block-page/blog-details-news-1.png" alt="">
                                    </div>
                                    <div class="blog-details-news-title">
                                        <h6>Will you be attending Affiliate Summit Europe?</h6>
                                        <p>February - 22th 2024</p>
                                    </div>
                                </div>
                                <div class="blog-details-news-content-wrapper d-flex gap-30 mb-20">
                                    <div class="blog-details-news-img tilt-zoom">
                                        <img src="images/blog/block-page/blog-details-news-2.png" alt="">
                                    </div>
                                    <div class="blog-details-news-title">
                                        <h6>Will you be attending Affiliate Summit Europe?</h6>
                                        <p>February - 22th 2024</p>
                                    </div>
                                </div>
                                <div class="blog-details-news-content-wrapper d-flex gap-30">
                                    <div class="blog-details-news-img tilt-zoom">
                                        <img src="images/blog/block-page/blog-details-news-3.png" alt="">
                                    </div>
                                    <div class="blog-details-news-title">
                                        <h6>Will you be attending Affiliate Summit Europe?</h6>
                                        <p>February - 22th 2024</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog-Details End -->
    <!-- Footer Start -->
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
