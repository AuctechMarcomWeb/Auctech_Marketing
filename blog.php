<?php
include 'db_con.php';

if (isset($_GET['page_url']))
{

    $page_url = mysqli_real_escape_string($con, $_GET['page_url']);

    $blog_query = "SELECT * FROM blogs WHERE blog_url = '$page_url'";
    $blog_result = mysqli_query($con, $blog_query);

    if ($blog_result && mysqli_num_rows($blog_result) > 0)
    {
        $blog = mysqli_fetch_assoc($blog_result);

        $image_query = "SELECT * FROM blogs_images WHERE blog_id = '{$blog['id']}'";
        $image_result = mysqli_query($con, $image_query);

        ?>


        <?php
    } else
    {

        echo "<p>Product not found.</p>";
    }
} else
{

    echo "<p>No product URL provided.</p>";
}
?>
<!DOCTYPE html>
<html lang="en" style="overflow-x: hidden;">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $blog['blog_desc_first'] ?></title>
    <meta name="description" content="<?php echo $blog['blog_desc_second'] ?>">
    <meta name="keywords" content="<?php echo $blog['blog_point_one'] ?>">

    <!--=====FAB ICON=======-->
    <link rel="shortcut icon" href="../assets/img/logo/logo.png" type="image/x-icon">


    <!--=====CSS=======-->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/fontawesome.css">
    <link rel="stylesheet" href="../assets/css/magnific-popup.css">
    <link rel="stylesheet" href="../assets/css/nice-select.css">
    <link rel="stylesheet" href="../assets/css/slick-slider.css">
    <link rel="stylesheet" href="../assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../assets/css/aos.css">
    <link rel="stylesheet" href="../assets/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="../assets/css/mobile-menu.css">
    <link rel="stylesheet" href="../assets/css/utility.css">
    <link rel="stylesheet" href="../assets/css/main.css">
    <link rel="stylesheet" href="../assets/css/my.css">
    <!--=====JQUERY=======-->
    <script src="../assets/js/jquery-3-7-1.min.js"></script>
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Karla:ital,wght@0,200..800;1,200..800&display=swap');
        body, a, p, span, h1, h2, h3, h4, h5, h6, button, input, placeholder, select, option, textarea{
            font-family: "Karla", sans-serif;
        }
        .header-tranperent {
            position: relative;
        }

        .vl-header-area1 .vl-main-menu ul>li>a {
            color: #000000;
        }

        .vl-header-area1 {
            top: 0px !important;
        }

        .inner-hero {
            min-height: 310px;
        }

        .inner-hero .inner-main-heading {
            padding-top: 0px;
        }

        .self-flex {
            display: flex;
            align-items: center;
        }

        .text-justify {
            text-align: justify;
        }

        .blog-details-content .image img {
            width: 100%;
            height: 400px;
            object-fit: cover;
        }

        .blog-content {
            font-family: 'Segoe UI', Roboto, sans-serif;
            font-size: 16px;
            line-height: 1.8;
            color: #222;
        }

        .blog-content h1,
        .blog-content h2,
        .blog-content h3,
        .blog-content h4 {
            margin-top: 1.5rem;
            margin-bottom: 1rem;
            color: #111;
            font-weight: 600;
        }

        .blog-content p {
            margin-bottom: 1.2rem;
            color: #222222;
        }

        .blog-content ul,
        .blog-content ol {
            margin: 1.2rem 0;
            padding-left: 1.5rem;
        }

        .blog-content li {
            margin-bottom: 0.5rem;
            line-height: 1.6;
            list-style: disc;
        }

        .blog-content span {
            font-size: inherit !important;
            line-height: inherit !important;
            color: inherit !important;
        }

        .blog-content strong,
        .blog-content b {
            font-weight: bold;
        }

        .blog-content em,
        .blog-content i {
            font-style: italic;
        }

        /* Optional: Responsive font scaling */
        @media (max-width: 768px) {
            .blog-content {
                font-size: 15px;
                line-height: 1.7;
            }
        }
    </style>

</head>

<body class="body1">
    <div class="paginacontainer">

        <div class="progress-wrap">
            <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
                <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
            </svg>
        </div>

    </div>

    <!--=====progress END=======-->

    <!--=====PRELOADER START=======-->

    <div class="preloader1">
        <!-- Preloader -->
        <div id="preloader">
            <!-- Progress Bar at Top -->
            <div class="progress-bar"></div>
            <!-- Title Logo in Center with Rotation -->
            <div class="title-logo">
                <img src="../assets/img/logo/logo.png" alt="Auctech Logo">
            </div>
        </div>
    </div>

    <!--=====PRELOADER END=======-->

    <!-- search popup start -->
    <div class="search__popup">
        <div class="container">
            <div class="row">
                <div class="col-xxl-12">
                    <div class="search__wrapper">
                        <div class="search__top d-flex justify-content-between align-items-center">
                            <div class="search__logo">
                                <a href="https://auctechmarketing.com/">
                                    <img src="../assets/img/logo/white-logo.png" alt="">
                                </a>
                            </div>
                            <div class="search__close">
                                <button type="button" class="search__close-btn search-close-btn">
                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M17 1L1 17" stroke="currentColor" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M1 1L17 17" stroke="currentColor" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <div class="search__form">
                            <form action="#">
                                <div class="search__input">
                                    <input class="search-input-field" type="text" placeholder="Type here to search...">
                                    <span class="search-focus-border"></span>
                                    <button type="submit">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M9.55 18.1C14.272 18.1 18.1 14.272 18.1 9.55C18.1 4.82797 14.272 1 9.55 1C4.82797 1 1 4.82797 1 9.55C1 14.272 4.82797 18.1 9.55 18.1Z"
                                                stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path d="M19.0002 19.0002L17.2002 17.2002" stroke="currentColor"
                                                stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- search popup end -->

    <!--=====HEADER START=======-->

 <!--=====HEADER START=======-->

<header>

    <div id="vl-header-sticky" class="vl-header-area1 header-tranperent">
        <div class="container header1-bg">
            <div class="row align-items-center">
                <div class="col-lg-2 col-md-6 col-6">
                    <div class="vl-logo">
                        <a href="https://auctechmarketing.com/" class="header1-logo-block"><img src="../assets/img/logo/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-8 d-none d-lg-block text-end">
                    <div class="vl-main-menu">
                        <nav class="vl-mobile-menu-active">
                            <ul>
                                <li> <a href="https://auctechmarketing.com/">Home </a></li>

                                <li class="has-dropdown"><a href="#">About <span><i
                                                class="fa-regular fa-angle-down"></i></span></a>
                                    <ul class="sub-menu">
                                        <li><a href="https://auctechmarketing.com/about.php"> About Us</a></li>
                                        <li><a href="https://auctechmarketing.com/our-founder.php"> Our Founder</a></li>
                                        <li><a href="https://auctechmarketing.com/career-at-auctech.php"> Career at Auctech </a></li>
                                    </ul>
                                </li>

                                <li><a href="#">Services <span><i class="fa-regular fa-angle-down"></i></span></a>
                                    <div class="vl-mega-menu">
                                        <div class="vl-home-menu">
                                            <div class="row gx-3 row-cols-1 row-cols-md-1 row-cols-lg-5">
                                                <div class="col">
                                                    <div class="vl-home-thumb">
                                                        <div class="img1">
                                                            <img src="../assets/img/demo/demo1.jpg" alt="">
                                                        </div>
                                                        <a class="text" href="https://auctechmarketing.com/branding-digital-consulting.php">Branding
                                                            & Digital PR Consulting</a>
                                                        <div class="btn-area1">
                                                            <a class="theme-btn2" href="https://auctechmarketing.com/branding-digital-consulting.php"><span class="arrow1"><i
                                                                        class="text-dark fa-solid fa-arrow-right"></i></span></a>
                                                        </div>
                                                        <div class="space20 d-lg-none d-block"></div>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="vl-home-thumb">
                                                        <div class="img1">
                                                            <img src="../assets/img/demo/demo2.jpg" alt="">
                                                        </div>
                                                        <a class="text" href="https://auctechmarketing.com/digital-marketing-consulting.php">Digital
                                                            Marketing Consulting</a>
                                                        <div class="btn-area1">
                                                            <a class="theme-btn2" href="https://auctechmarketing.com/digital-marketing-consulting.php"><span class="arrow1"><i
                                                                        class="text-dark fa-solid fa-arrow-right"></i></span></a>
                                                        </div>
                                                        <div class="space20 d-lg-none d-block"></div>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="vl-home-thumb">
                                                        <div class="img1">
                                                            <img src="../assets/img/demo/demo3.jpg" alt="">
                                                        </div>
                                                        <a class="text" href="https://auctechmarketing.com/social-media-marketing.php">Social Media
                                                            Marketing (SMM)</a>
                                                        <div class="btn-area1">
                                                            <a class="theme-btn2" href="https://auctechmarketing.com/social-media-marketing.php"><span class="arrow1"><i
                                                                        class="text-dark fa-solid fa-arrow-right"></i></span></a>
                                                        </div>

                                                        <div class="space20 d-lg-none d-block"></div>
                                                    </div>
                                                </div>
                                                <div class="col ">
                                                    <div class="vl-home-thumb">
                                                        <div class="img1">
                                                            <img src="../assets/img/demo/demo4.jpg" alt="">
                                                        </div>
                                                        <a class="text" href="https://auctechmarketing.com/search-engine-marketing.php">Search
                                                            Engine Marketing (SEM)</a>
                                                        <div class="btn-area1">
                                                            <a class="theme-btn2" href="https://auctechmarketing.com/search-engine-marketing.php"><span class="arrow1"><i
                                                                        class="text-dark fa-solid fa-arrow-right"></i></span></a>
                                                        </div>

                                                        <div class="space20 d-lg-none d-block"></div>
                                                    </div>
                                                </div>

                                                <div class="col ">
                                                    <div class="vl-home-thumb">
                                                        <div class="img1">
                                                            <img src="../assets/img/demo/demo5.jpg" alt="">
                                                        </div>
                                                        <a class="text" href="https://auctechmarketing.com/seo-services.php">SEO Services</a>
                                                        <div class="btn-area1">
                                                            <a class="theme-btn2" href="https://auctechmarketing.com/seo-services.php"><span class="arrow1"><i
                                                                        class="text-dark fa-solid fa-arrow-right"></i></span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row gx-3 row-cols-1 row-cols-md-1 row-cols-lg-5">
                                                <div class="col">
                                                    <div class="vl-home-thumb mt-20">
                                                        <div class="img1">
                                                            <img src="../assets/img/demo/demo6.jpg" alt="">
                                                        </div>
                                                        <a class="text" href="https://auctechmarketing.com/pay-per-click.php">Pay-Per-Click Services (PPC)</a>
                                                        <div class="btn-area1">
                                                            <a class="theme-btn2" href="https://auctechmarketing.com/pay-per-click.php"><span class="arrow1"><i
                                                                        class="text-dark fa-solid fa-arrow-right"></i></span></a>
                                                        </div>

                                                        <div class="space20 d-lg-none d-block"></div>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="vl-home-thumb mt-20">
                                                        <div class="img1">
                                                            <img src="../assets/img/demo/demo7.jpg" alt="">
                                                        </div>
                                                        <a class="text" href="https://auctechmarketing.com/website-developemnt.php">Website Development</a>
                                                        <div class="btn-area1">
                                                            <a class="theme-btn2" href="https://auctechmarketing.com/website-developemnt.php"><span class="arrow1"><i
                                                                        class="text-dark fa-solid fa-arrow-right"></i></span></a>
                                                        </div>

                                                        <div class="space20 d-lg-none d-block"></div>
                                                    </div>
                                                </div>
                                                <div class="col ">
                                                    <div class="vl-home-thumb mt-20">
                                                        <div class="img1">
                                                            <img src="../assets/img/demo/demo8.jpg" alt="">
                                                        </div>
                                                        <a class="text" href="https://auctechmarketing.com/auctech-marketing-newmobile-app-development.php">Mobile App Development</a>
                                                        <div class="btn-area1">
                                                            <a class="theme-btn2" href="https://auctechmarketing.com/auctech-marketing-newmobile-app-development.php"><span class="arrow1"><i
                                                                        class="text-dark fa-solid fa-arrow-right"></i></span></a>
                                                        </div>

                                                        <div class="space20 d-lg-none d-block"></div>
                                                    </div>
                                                </div>
                                                <div class="col ">
                                                    <div class="vl-home-thumb mt-20">
                                                        <div class="img1">
                                                            <img src="../assets/img/demo/demo9.jpg" alt="">
                                                        </div>
                                                        <a class="text" href="https://auctechmarketing.com/ecommerce-solutions.php">E-commerce Solutions</a>
                                                        <div class="btn-area1">
                                                            <a class="theme-btn2" href="https://auctechmarketing.com/ecommerce-solutions.php"><span class="arrow1"><i
                                                                        class="text-dark fa-solid fa-arrow-right"></i></span></a>
                                                        </div>

                                                        <div class="space20 d-lg-none d-block"></div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </li>

                               <li><a href="#">Solutions <span><i class="fa-regular fa-angle-down"></i></span></a>
                                    <div class="vl-mega-menu">
                                        <div class="vl-home-menu">
                                            <div class="row gx-3 row-cols-1 row-cols-md-1 row-cols-lg-5">
                                                <div class="col">
                                                    <div class="vl-home-thumb">
                                                        <div class="img1">
                                                            <img src="../assets/img/demo/demo1.jpg" alt="">
                                                        </div>
                                                        <a class="text" href="https://auctechmarketing.com/wealthbuilder-crm.php">Wealth Builder CRM</a>
                                                        <div class="btn-area1">
                                                            <a class="theme-btn2"
                                                                href="https://auctechmarketing.com/wealthbuilder-crm.php"><span
                                                                    class="arrow1"><i
                                                                        class="text-dark fa-solid fa-arrow-right"></i></span></a>
                                                        </div>
                                                        <div class="space20 d-lg-none d-block"></div>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="vl-home-thumb">
                                                        <div class="img1">
                                                            <img src="../assets/img/demo/demo2.jpg" alt="">
                                                        </div>
                                                        <a class="text" href="https://auctechmarketing.com/auctech-realpro.php">Auctech RealPro</a>
                                                        <div class="btn-area1">
                                                            <a class="theme-btn2"
                                                                href="https://auctechmarketing.com/auctech-realpro.php"><span
                                                                    class="arrow1"><i
                                                                        class="text-dark fa-solid fa-arrow-right"></i></span></a>
                                                        </div>
                                                        <div class="space20 d-lg-none d-block"></div>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="vl-home-thumb">
                                                        <div class="img1">
                                                            <img src="../assets/img/demo/demo3.jpg" alt="">
                                                        </div>
                                                        <a class="text" href="https://auctechmarketing.com/sales-promotions.php">Sales Promotions</a>
                                                        <div class="btn-area1">
                                                            <a class="theme-btn2"
                                                                href="https://auctechmarketing.com/sales-promotions.php"><span
                                                                    class="arrow1"><i
                                                                        class="text-dark fa-solid fa-arrow-right"></i></span></a>
                                                        </div>

                                                        <div class="space20 d-lg-none d-block"></div>
                                                    </div>
                                                </div>
                                                <div class="col ">
                                                    <div class="vl-home-thumb">
                                                        <div class="img1">
                                                            <img src="../assets/img/demo/demo4.jpg" alt="">
                                                        </div>
                                                        <a class="text" href="https://auctechmarketing.com/loyalty-program.php">Loyalty Programs</a>
                                                        <div class="btn-area1">
                                                            <a class="theme-btn2"
                                                                href="https://auctechmarketing.com/loyalty-program.php"><span
                                                                    class="arrow1"><i
                                                                        class="text-dark fa-solid fa-arrow-right"></i></span></a>
                                                        </div>

                                                        <div class="space20 d-lg-none d-block"></div>
                                                    </div>
                                                </div>

                                                <div class="col ">
                                                    <div class="vl-home-thumb">
                                                        <div class="img1">
                                                            <img src="../assets/img/demo/demo5.jpg" alt="">
                                                        </div>
                                                        <a class="text" href="https://auctechmarketing.com/Employee-Engagement-&-Rewards.php">Employee Engagement &
                                                Rewards</a>
                                                        <div class="btn-area1">
                                                            <a class="theme-btn2" href="https://auctechmarketing.com/Employee-Engagement-&-Rewards.php"><span
                                                                    class="arrow1"><i
                                                                        class="text-dark fa-solid fa-arrow-right"></i></span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row gx-3 row-cols-1 row-cols-md-1 row-cols-lg-5">
                                                <div class="col">
                                                    <div class="vl-home-thumb mt-20">
                                                        <div class="img1">
                                                            <img src="../assets/img/demo/demo6.jpg" alt="">
                                                        </div>
                                                        <a class="text" href="https://auctechmarketing.com/ChannelLoyaltyPrograms.php">Channel Loyalty Programs
                                                           </a>
                                                        <div class="btn-area1">
                                                            <a class="theme-btn2" href="https://auctechmarketing.com/ChannelLoyaltyPrograms.php"><span
                                                                    class="arrow1"><i
                                                                        class="text-dark fa-solid fa-arrow-right"></i></span></a>
                                                        </div>

                                                        <div class="space20 d-lg-none d-block"></div>
                                                    </div>
                                                </div>
                                               
                                            </div>

                                        </div>
                                    </div>
                                </li>
                                <li> <a href="https://www.auctech.in/portfolio/" target="_blank">Portfolio</a></li>
                                <li> <a href="https://auctechmarketing.com/case-study.php">Case Studies </a></li>
                                <li> <a href="https://auctechmarketing.com/blogs.php">Blogs</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-6">
                    <div class="vl-header1-btns text-end d-none d-lg-block">
                        <div class="buttons">
                            <a href="https://auctechmarketing.com/contact.php" class="theme-btn1">Contact Us</a>
                        </div>
                    </div>
                    <div class="vl-header-action-item d-block d-lg-none">
                        <button type="button" class="vl-offcanvas-toggle">
                            <i class="fa-duotone fa-solid fa-bars-staggered"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!--=====HEADER END =======-->

<!--===== MOBILE HEADER STARTS =======-->
<div class="vl-offcanvas vl-header-area1">
    <div class="vl-offcanvas-wrapper">
        <div class="vl-offcanvas-header d-flex justify-content-between align-items-center mb-90">
            <div class="vl-offcanvas-logo">
                <a href="https://auctechmarketing.com/" class="header1-logo-block"><img style="height: 70px;" src="../assets/img/logo/logo.png"
                        alt=""></a>
            </div>
            <div class="vl-offcanvas-close">
                <button class="vl-offcanvas-close-toggle"><i class="fa-solid fa-xmark"></i></button>
            </div>
        </div>

        <div class="vl-offcanvas-menu d-lg-none mb-40">
            <nav></nav>
        </div>

        <div class="space20"></div>
        <div class="vl-footer-contact3 vl-footer-widget-black1 mb-20 sm:ml-0 md:ml-0">
            <h4>Contact Information</h4>
            <div class="single-contact-item">
                <div class="icon">
                    <img src="../assets/img/icons/footer-contact-icon1.svg" alt="">
                </div>
                <div class="text">
                    <a href="mail:info@auctech.in">info@auctech.in</a>
                </div>
            </div>
            <div class="single-contact-item">
                <div class="icon">
                    <img src="../assets/img/icons/footer-contact-icon3.svg" alt="">
                </div>
                <div class="text">
                    <a href="tel:9616171814">+91 9616171814</a>,
                    <a href="tel:9838075493">+91 9838075493</a>
                </div>
            </div>

        </div>
        <div class="vl-offcanvas-social">
            <h4>Social Media</h4>
            <div class="vl-copyright-social2 text-start">
                <a href="https://www.facebook.com/auctechmarketing"><i class="fa-brands fa-facebook-f"></i></a>
                <a href="https://www.instagram.com/auctechmarketing/"><i class="fa-brands fa-instagram"></i></a>
                <a href="https://www.linkedin.com/"><i class="fa-brands fa-linkedin-in"></i></a>
                <a href="https://x.com/auctechmarcom"><i class="fa-brands fa-x-twitter"></i></a>
                <a href="#"><i class="fa-brands fa-youtube"></i></a>
            </div>
        </div>

    </div>
</div>
<div class="vl-offcanvas-overlay"></div>
<!--===== MOBILE HEADER END =======-->

    <!--=====HEADER END =======-->

    <main>

        <!--===== HERO AREA START =====-->

        <div class="inner-hero" style="background-image: url(../assets/img/bg/inner-hero-bg.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 m-auto text-center">
                        <div class="inner-main-heading">
                            <h1 class="auctech-color">Blog Details</h1>
                            <div class="breadcrumbs-pages">
                                <ul>
                                    <li><a href="https://auctechmarketing.com/">Home</a></li>
                                    <li class="angle"><i class="fa-solid fa-angle-right"></i></li>
                                    <li>Blog Details</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--===== HERO AREA START =====-->

        <!--===== BLOG AREA START =====-->

        <div class="blog-details-area sp">
            <div class="container">
                <div class="row">

                    <div class="col-lg-8">
                        <div class="blog-details-content mr-30 md:mr-0 sm:mr-0">
                            <article>
                                <div class="details-content">
                                    <div class="image">
                                        <?php
                                        $image_row = mysqli_fetch_assoc($image_result);
                                        if ($image_row)
                                        {
                                            echo "<img class='w-full' src='blog_uploads/{$image_row['image']}' alt='Blog Image'/> ";
                                        } else
                                        {
                                            echo "<p>No Images available.</p>";
                                        }
                                        ?>

                                    </div>
                                    <div class="vl-blog12-meta mt-24">
                                        <a href="#" class="date"><img src="../assets/img/icons/date1.svg" alt="">
                                            <?php echo date("j F Y", strtotime($blog['created_at'])); ?></a>
                                        <a href="#" class="author"><img src="../assets/img/icons/author1.svg" alt="">
                                            Team
                                            Auctech</a>
                                    </div>
                                    <div class="heading2 mt-24">
                                        <h3><?php echo $blog['blog_heading'] ?></h3>
                                        <div class="blog-content mt-16">
                                            <?php echo html_entity_decode($blog['blog_desc_two']); ?>
                                        </div>


                                    </div>

                                </div>
                            </article>

                            <article>
                                <div class="details-content mt-40">
                                    <div class="row">
                                        <?php
                                        mysqli_data_seek($image_result, 0);
                                        while ($logo_row = mysqli_fetch_assoc($image_result))
                                        {
                                            if (!empty($logo_row['logos']))
                                            {
                                                $imageSrc = 'blog_uploads/' . htmlspecialchars($logo_row['logos']);
                                                ?>
                                                <div class="col-md-6">
                                                    <div class="image mt-30">
                                                        <img class="w-full" src="<?php echo $imageSrc; ?>" alt="Logo Image">
                                                    </div>
                                                </div>
                                                <?php
                                            }
                                        }
                                        ?>
                                    </div>



                                </div>
                            </article>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="sidebar-area">

                            <div class="_sidebar-widget _recent">
                                <h3>Other Blogs</h3>
                                <div class="recent-blog">
                                     <?php
                                    include('db_con.php');                                   
                                    $sql = "SELECT blogs.blog_heading AS heading, 
                                            blogs_images.image, 
                                            blogs.blog_url,
                                            blogs.created_at
                                            FROM blogs
                                            INNER JOIN blogs_images ON blogs.id = blogs_images.blog_id
                                            GROUP BY blogs.id  
                                            ORDER BY blogs.created_at DESC LIMIT 4"; 

                                    $result = $con->query($sql);
                                    if ($result->num_rows > 0) {
                                        while ($row = $result->fetch_assoc()) {
                                            $heading = $row['heading'];
                                            $image = $row['image'];
                                            $blog_url = $row['blog_url'];
                                            $created_at = $row['created_at'];
                                            $formatted_date = date("j F Y", strtotime($created_at));
                                    ?>
                                    <div class="recent-blog-post">
                                        <div class="">
                                            <div class="image">
                                                <img src="blog_uploads/<?php echo $image; ?>" alt="">
                                            </div>
                                        </div>
                                        <div class="content">
                                            <a href="<?php echo $blog_url; ?>" class="date"><img src="../assets/img/icons/date1.svg" alt=""><?php echo date("j F Y", strtotime($blog['created_at'])); ?></a>
                                            <h4><a href="<?php echo $blog_url; ?>"><?php echo $heading; ?></a></h4>
                                        </div>
                                    </div>

                                    <?php 
                                        }
                                    } else {
                                        
                                        echo "<p>No blog found for today</p>";
                                    }
                                    ?>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!--===== BLOG DETAILS AREA END =====-->


      <div class="cta6">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-lg-4">
                  <div class="cta4-image image-anime reveal">
                     <img class="w-full" src="../assets/img/others/cta4-image.png" alt="">
                  </div>
               </div>
               <div class="col-lg-8">
                  <div class="cta6-form-area">
                     <div class="heading6">
                        <h3 class="auctech-color">Let’s Work Together — Contact Us</h3>
                     </div>
                     <div class="form-area mt-4">
                        <p>We help businesses grow with smart design and strategy.
                           From websites to marketing, we’ve got you covered.
                           Let’s create something impactful together.</p>
                        <div class="buttons">
                           <a href="https://auctechmarketing.com/contact.php" class="theme-btn1 mt-4">Contact Us</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>

    </main>

    <footer class="vl-footer-area6">

    <!-- footer area start -->
    <div class="footer-bottom-content">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <div class="vl-footer-widget-black6 vl-footer1-logo-area mr-50 mb-50">
                        <div class="vl-footer-logo black-logo">
                            <a href="https://auctechmarketing.com/"><img style="height: 85px;" src="../assets/img/logo/logo.png" alt=""></a>
                        </div>
                        <div class="vl-footer-text heading6 mt-20">
                            <p class="mt-16 text-justify">Auctech Marcom delivers end-to-end solutions in websites,
                                apps,
                                SEO, creative design, and campaigns — built to grow your brand.</p>
                        </div>
                        <div class="vl-footer-social6 text-start mt-20">
                            <a href="https://www.facebook.com/auctechmarketing" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
                            <a href="https://www.instagram.com/auctechmarketing/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                            <a href="https://www.linkedin.com/" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a>
                            <a href="https://x.com/auctechmarcom" target="_blank"><i class="fa-brands fa-x-twitter"></i></a>
                            <a href="#" target="_blank"><i class="fa-brands fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2  col-md-6 col-6">
                    <div class="vl-footer-widget-black6 mb-50 ml-20 md:ml-30 sm:ml-0">
                        <h4 class="auctech-color">Quick Links</h4>
                        <div class="vl-footer-list">
                            <ul>
                                <li><a href="https://auctechmarketing.com/">Home</a></li>
                                <li><a href="https://auctechmarketing.com/about.php">About Us</a></li>
                                <li><a href="https://auctechmarketing.com/career-at-auctech.php">Career </a></li>
                                <li><a href="#">Services</a></li>
                                <li><a href="https://auctechmarketing.com/blogs.php">Blogs</a></li>
                                <li><a href="https://auctechmarketing.com/contact.php">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-6">
                    <div class="vl-footer-widget-black6 mb-50 ml-70 md:ml-0 sm:ml-0">
                        <h4 class="auctech-color">Solutions</h4>
                        <div class="vl-footer-list">
                            <ul>
                                  <li><a href="https://auctechmarketing.com/wealthbuilder-crm.php">Wealth Builder CRM</a></li>
                                        <li><a href="https://auctechmarketing.com/auctech-realpro.php">Auctech RealPro</a></li>
                                        <li><a href="https://auctechmarketing.com/sales-promotions.php">Sales Promotions</a></li>
                                        <li><a href="https://auctechmarketing.com/loyalty-program.php">Loyalty Programs</a></li>
                                        <li><a href="https://auctechmarketing.com/Employee-Engagement-&-Rewards.php">Employee Engagement &
                                                Rewards</a></li>
                                        <li><a href="https://auctechmarketing.com/ChannelLoyaltyPrograms.php">Channel Loyalty Programs</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-8 col-sm-6">
                    <div class="vl-footer-contact6 vl-footer-widget-black6 mb-50 sm:ml-0 md:ml-0">
                        <h4 class="auctech-color">Contact Information</h4>

                        <div class="single-contact-item">
                            <div class="icon">
                                <img src="../assets/img/icons/footer-contact-icon3.svg" alt="">
                            </div>
                            <div class="text">
                                <a href="tel:9616171814"> +91 9616171814</a>,
                                <a href="tel:9838075493"> +91 9838075493</a>
                            </div>
                        </div>

                        <div class="single-contact-item">
                            <div class="icon">
                                <img src="../assets/img/icons/footer-contact-icon1.svg" alt="">
                            </div>
                            <div class="text">
                                <a href="mail: info@auctech.in"> info@auctech.in</a>
                            </div>
                        </div>

                        <div class="single-contact-item">
                            <div class="icon">
                                <img src="../assets/img/icons/footer-contact-icon2.svg" alt="">
                            </div>
                            <div class="text">
                                <a href="#">Flat 101, Shaligram Building, <br>
                                    New Jiamau, 1090 Chauraha, <br>
                                    Lucknow, Uttar Pradesh 226001</a>
                            </div>
                        </div>



                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer area end -->

    <!-- copy-right area start -->
    <div class="container">
        <div class="row vl-copyright6 _dv-top align-items-center">
            <div class="col-lg-12">
                <div class="copyright-text left-side d-flex align-items-center justify-content-center">
                    <p>ⓒCopyright 2025 <a href="#" class="auctech-color">Auctech MarCom Pvt. Ltd.</a> </p>
                    &nbsp;
                    <p>| All rights reserved</p>
                </div>
            </div>
        </div>
    </div>
    <!-- copy-right area end -->

</footer>


    <!--=== js === -->
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/fontawesome.js"></script>
    <script src="../assets/js/mobile-menu.js"></script>
    <script src="../assets/js/jquery.magnific-popup.js"></script>
    <script src="../assets/js/owl.carousel.min.js"></script>
    <script src="../assets/js/jquery.countup.js"></script>
    <script src="../assets/js/slick-slider.js"></script>
    <script src="../assets/js/circle-progress.js"></script>
    <script src="../assets/js/jquery.nice-select.js"></script>
    <script src="../assets/js/gsap.min.js"></script>
    <script src="../assets/js/ScrollTrigger.min.js"></script>
    <script src="../assets/js/swiper-bundle.js"></script>
    <script src="../assets/js/Splitetext.js"></script>
    <script src="../assets/js/text-animation.js"></script>
    <script src="../assets/js/aos.js"></script>
    <script src="../assets/js/SmoothScroll.js"></script>
    <script src="../assets/js/jaquery-ripples.js"></script>
    <script src="../assets/js/jquery.lineProgressbar.js"></script>
    <script src="../assets/js/animation.js"></script>
    <script src="../assets/js/main.js"></script>

</body>

</html>