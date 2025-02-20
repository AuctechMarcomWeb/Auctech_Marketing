<!DOCTYPE html>
<html dir="ltr" lang="zxx">

<head>
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta charset="utf-8" />
    <meta name="description" content="Auctech Marketing Pvt. Ltd." />
    <meta name="keywords" content="AuctechMarketingPvt.Ltd." />
    <meta name="author" content="Auctech Marketing Pvt. Ltd." />

    <title>Auctech Marketing Pvt. Ltd. | Contact</title>

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

    <!-- Contact Page Star -->
    <div class="contact-page body-black">
        <div class="pages-heading p-relative">
            <div class="pages-heading-image p-relative z-index-1">
                <img src="images/contact/contact-header-img.png" alt="">
            </div>
            <div class="pages-heading-text p-absolute z-index-1">
                <span>Home / Contact</span>
                <h2>Contact Us</h2>
            </div>
        </div>
        <div class="contact-page-data mt-140 p-relative">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-4">
                        <div class="contact-page-info ">
                            <div class="section-title mb-40 style-1 ">
                                <span class="mb-15">Get in Touch<img src="images/icon/section-title-arrow.svg"
                                        alt=""></span>
                                <h2>LET’S WORK</h2>
                                <h4>TOGETHER</h4>
                            </div>
                            <div class="contact-loction mb-50">
                                <h4 class="mb-20">India Office:</h4>
                                <p>Flat 101, Shaligram Building,
                                    New Jiamau, 1090 Chauraha,
                                    Lucknow, Uttar Pradesh 226001</p>
                            </div>
                            <div class="contact-loction mb-50">
                                <h4 class="mb-20">Netherlands Office:</h4>
                                <p></p>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-8 col-md-8">
                        <div class="team-secondary-partner blog-details-form contact-page-form">
                            <div class="form-heading">
                                <h3>Drop Us a Message</h3>
                                <div class="title-border-5"></div>
                            </div>
                            <div class="contact-form">
                                <form  method="POST" action="save_contact.php" id="enquiryForm" class="contact-form">
                                    <div class="contract-group gx-1">
                                        <div class="input-col">
                                            <label class="name" for="fullname">Full Name:</label>
                                            <input type="text" id="name" name="name" class="no-border">
                                        </div>
                                        <div class="input-col">
                                            <label class="email" for="email">Email Address:</label>
                                            <input type="email" id="emails" name="email" class="no-border">
                                        </div>
                                    </div>
                                    <div class="contract-group gx-1">
                                        <div class="input-col">
                                            <label class="phone" for="phone">Phone:</label>
                                            <input type="numbert" id="phone" name="phone" class="no-border">
                                        </div>
                                        <div class="input-col">
                                            <label for="subject">Subject:</label>
                                            <select id="subject" name="subject" class="no-border" required>
                                                <option class="selector-menu" value="" disabled selected>- - Select - -</option>
                                                <option class="selector-menu" value="general">Reels & Creative</option>
                                                <option class="selector-menu" value="support">Web Development</option>
                                                <option class="selector-menu" value="support">App Development</option>
                                                <option class="selector-menu" value="billing">Marketing</option>
                                                <option class="selector-menu" value="feedback">SEO</option>
                                                <option class="selector-menu" value="Other">Other</option>
                                            </select>                                            
                                        </div>
                                    </div>
                                    <div class="contract-group full-row">
                                        <label class="inbox" for="message">Message:</label>
                                        <textarea id="messages" name="message" class="no-border"></textarea>
                                    </div>
                                    <div class="page-btn mt-60">
                                        <button type="submit" name="submit"><a>Send Message</a></button>
                                        <!-- <a href="#" type="submit">Send Message</a> -->
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="company-map pt-140">
                <span>
                    <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3559.784137440868!2d80.96336257612022!3d26.846817262917984!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399bfd10cfd0bb2f%3A0x36a1e3803e493540!2sAuctech%20Marketing%20Communication%20Pvt.%20Ltd.!5e0!3m2!1sen!2sin!4v1719833959878!5m2!1sen!2sin"
                        style="width: 100%; height: 672px; border: 0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </span>
            </div>
        </div>
    </div>
    <!-- Contact Page End -->
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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
$(document).ready(function() {
    $('#enquiryForm').submit(function(e) {
        e.preventDefault();

        var formData = $(this).serialize();

        $.ajax({
            url: 'save_contact.php', 
            type: 'POST',
            data: formData,
            success: function(response) {
                if (response == 'success') {
                    
                    Swal.fire({
                        icon: 'success',
                        title: 'Message Sent!',
                        text: 'Your message has been sent successfully.',
                    }).then(function() {
                        
                        $('#enquiryForm')[0]
                    .reset(); 
                    });
                } else {
                    
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Something went wrong. Please try again later.',
                    });
                }
            },
            error: function() {
                
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Something went wrong. Please try again later.',
                });
            }
        });
    });
});
</script>
</body>

</html>