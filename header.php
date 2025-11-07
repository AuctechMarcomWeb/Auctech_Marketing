 <script src="https://code.jquery.com/jquery-3.7.1.js" ></script>
    <script>
        $(document).ready(function(){
            // Allowed extensions
            const allowed = [
                '.jpg','.jpeg','.png','.webp','.gif','.pdf','.docx','.heic','.heif'
            ];
        
            // Convert to accept string for HTML input
            const acceptStr = allowed.join(',');
        
            // Apply to all file inputs on page load
            $('input[type="file"]').attr('accept', acceptStr);
        
            // Optional: prevent pasting/dragging of disallowed files
            $(document).on('change', 'input[type="file"]', function(){
                const files = this.files;
                if(!files) return;
                for(let i=0;i<files.length;i++){
                    const f = files[i];
                    const ext = '.' + f.name.split('.').pop().toLowerCase();
                    if(allowed.indexOf(ext) === -1){
                        alert('Only image/PDF/DOCX files are allowed!');
                        $(this).val(''); // reset input
                        return;
                    }
                }
            });
        });
    </script>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Karla:ital,wght@0,200..800;1,200..800&display=swap');
        body, a, p, span, h1, h2, h3, h4, h5, h6, button, input, placeholder, select, option, textarea{
            font-family: "Karla", sans-serif;
        }
         .main-heading1 h1 {
        font-size: 55px;
    }
        @media only screen and (min-width: 1200px) and (max-width: 1499px) {
    .main-heading1 h1 {
        font-size: 55px;
    }
}
</style>
<header>

    <div id="vl-header-sticky" class="vl-header-area1 header-tranperent">
        <div class="container header1-bg">
            <div class="row align-items-center">
                <div class="col-lg-2 col-md-6 col-6">
                    <div class="vl-logo">
                        <a href="https://auctechmarketing.com/" class="header1-logo-block"><img src="assets/img/logo/logo.png" alt=""></a>
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
                                        <li><a href="about.php"> About Us</a></li>
                                        <li><a href="our-founder.php"> Our Founder</a></li>
                                        <li><a href="career-at-auctech.php"> Career at Auctech </a></li>
                                    </ul>
                                </li>

                                <li><a href="#">Services <span><i class="fa-regular fa-angle-down"></i></span></a>
                                    <div class="vl-mega-menu">
                                        <div class="vl-home-menu">
                                            <div class="row gx-3 row-cols-1 row-cols-md-1 row-cols-lg-5">
                                                <div class="col">
                                                    <div class="vl-home-thumb">
                                                        <div class="img1">
                                                            <img src="https://auctech.in/images/Creative-Production/2.png" alt="">
                                                        </div>
                                                        <a class="text" href="branding-digital-consulting.php">Branding
                                                            & Digital PR Consulting</a>
                                                        <div class="btn-area1">
                                                            <a class="theme-btn2" href="branding-digital-consulting.php"><span class="arrow1"><i
                                                                        class="text-dark fa-solid fa-arrow-right"></i></span></a>
                                                        </div>
                                                        <div class="space20 d-lg-none d-block"></div>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="vl-home-thumb">
                                                        <div class="img1">
                                                            <img src="https://auctech.in/images/Creative-Production/2.png" alt="">
                                                        </div>
                                                        <a class="text" href="digital-marketing-consulting.php">Digital
                                                            Marketing Consulting</a>
                                                        <div class="btn-area1">
                                                            <a class="theme-btn2" href="digital-marketing-consulting.php"><span class="arrow1"><i
                                                                        class="text-dark fa-solid fa-arrow-right"></i></span></a>
                                                        </div>
                                                        <div class="space20 d-lg-none d-block"></div>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="vl-home-thumb">
                                                        <div class="img1">
                                                            <img src="https://auctech.in/images/Creative-Production/2.png" alt="">
                                                        </div>
                                                        <a class="text" href="social-media-marketing.php">Social Media
                                                            Marketing (SMM)</a>
                                                        <div class="btn-area1">
                                                            <a class="theme-btn2" href="social-media-marketing.php"><span class="arrow1"><i
                                                                        class="text-dark fa-solid fa-arrow-right"></i></span></a>
                                                        </div>

                                                        <div class="space20 d-lg-none d-block"></div>
                                                    </div>
                                                </div>
                                                <div class="col ">
                                                    <div class="vl-home-thumb">
                                                        <div class="img1">
                                                            <img src="https://auctech.in/images/Creative-Production/2.png" alt="">
                                                        </div>
                                                        <a class="text" href="search-engine-marketing.php">Search
                                                            Engine Marketing (SEM)</a>
                                                        <div class="btn-area1">
                                                            <a class="theme-btn2" href="search-engine-marketing.php"><span class="arrow1"><i
                                                                        class="text-dark fa-solid fa-arrow-right"></i></span></a>
                                                        </div>

                                                        <div class="space20 d-lg-none d-block"></div>
                                                    </div>
                                                </div>

                                                <div class="col ">
                                                    <div class="vl-home-thumb">
                                                        <div class="img1">
                                                            <img src="https://auctech.in/images/Creative-Production/2.png" alt="">
                                                        </div>
                                                        <a class="text" href="seo-services.php">SEO Services</a>
                                                        <div class="btn-area1">
                                                            <a class="theme-btn2" href="seo-services.php"><span class="arrow1"><i
                                                                        class="text-dark fa-solid fa-arrow-right"></i></span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row gx-3 row-cols-1 row-cols-md-1 row-cols-lg-5">
                                                <div class="col">
                                                    <div class="vl-home-thumb mt-20">
                                                        <div class="img1">
                                                            <img src="https://auctech.in/images/Creative-Production/2.png" alt="">
                                                        </div>
                                                        <a class="text" href="pay-per-click.php">Pay-Per-Click Services (PPC)</a>
                                                        <div class="btn-area1">
                                                            <a class="theme-btn2" href="pay-per-click.php"><span class="arrow1"><i
                                                                        class="text-dark fa-solid fa-arrow-right"></i></span></a>
                                                        </div>

                                                        <div class="space20 d-lg-none d-block"></div>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="vl-home-thumb mt-20">
                                                        <div class="img1">
                                                            <img src="https://auctech.in/images/Creative-Production/2.png" alt="">
                                                        </div>
                                                        <a class="text" href="website-developemnt.php">Website Development</a>
                                                        <div class="btn-area1">
                                                            <a class="theme-btn2" href="website-developemnt.php"><span class="arrow1"><i
                                                                        class="text-dark fa-solid fa-arrow-right"></i></span></a>
                                                        </div>

                                                        <div class="space20 d-lg-none d-block"></div>
                                                    </div>
                                                </div>
                                                <div class="col ">
                                                    <div class="vl-home-thumb mt-20">
                                                        <div class="img1">
                                                            <img src="https://auctech.in/images/Creative-Production/2.png" alt="">
                                                        </div>
                                                        <a class="text" href="mobile-app-development.php">Mobile App Development</a>
                                                        <div class="btn-area1">
                                                            <a class="theme-btn2" href="mobile-app-development.php"><span class="arrow1"><i
                                                                        class="text-dark fa-solid fa-arrow-right"></i></span></a>
                                                        </div>

                                                        <div class="space20 d-lg-none d-block"></div>
                                                    </div>
                                                </div>
                                                <div class="col ">
                                                    <div class="vl-home-thumb mt-20">
                                                        <div class="img1">
                                                            <img src="https://auctech.in/images/Creative-Production/2.png" alt="">
                                                        </div>
                                                        <a class="text" href="ecommerce-solutions.php">E-commerce Solutions</a>
                                                        <div class="btn-area1">
                                                            <a class="theme-btn2" href="ecommerce-solutions.php"><span class="arrow1"><i
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
                                                            <img src="https://auctech.in/images/Creative-Production/2.png" alt="">
                                                        </div>
                                                        <a class="text" href="wealthbuilder-crm.php">Wealth Builder CRM</a>
                                                        <div class="btn-area1">
                                                            <a class="theme-btn2"
                                                                href="wealthbuilder-crm.php"><span
                                                                    class="arrow1"><i
                                                                        class="text-dark fa-solid fa-arrow-right"></i></span></a>
                                                        </div>
                                                        <div class="space20 d-lg-none d-block"></div>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="vl-home-thumb">
                                                        <div class="img1">
                                                            <img src="https://auctech.in/images/Creative-Production/2.png" alt="">
                                                        </div>
                                                        <a class="text" href="auctech-realpro.php">Auctech RealPro</a>
                                                        <div class="btn-area1">
                                                            <a class="theme-btn2"
                                                                href="auctech-realpro.php"><span
                                                                    class="arrow1"><i
                                                                        class="text-dark fa-solid fa-arrow-right"></i></span></a>
                                                        </div>
                                                        <div class="space20 d-lg-none d-block"></div>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="vl-home-thumb">
                                                        <div class="img1">
                                                            <img src="https://auctech.in/images/Creative-Production/2.png" alt="">
                                                        </div>
                                                        <a class="text" href="sales-promotions.php">Sales Promotions</a>
                                                        <div class="btn-area1">
                                                            <a class="theme-btn2"
                                                                href="sales-promotions.php"><span
                                                                    class="arrow1"><i
                                                                        class="text-dark fa-solid fa-arrow-right"></i></span></a>
                                                        </div>

                                                        <div class="space20 d-lg-none d-block"></div>
                                                    </div>
                                                </div>
                                                <div class="col ">
                                                    <div class="vl-home-thumb">
                                                        <div class="img1">
                                                            <img src="https://auctech.in/images/Creative-Production/2.png" alt="">
                                                        </div>
                                                        <a class="text" href="loyalty-program.php">Loyalty Programs</a>
                                                        <div class="btn-area1">
                                                            <a class="theme-btn2"
                                                                href="loyalty-program.php"><span
                                                                    class="arrow1"><i
                                                                        class="text-dark fa-solid fa-arrow-right"></i></span></a>
                                                        </div>

                                                        <div class="space20 d-lg-none d-block"></div>
                                                    </div>
                                                </div>

                                                <div class="col ">
                                                    <div class="vl-home-thumb">
                                                        <div class="img1">
                                                            <img src="https://auctech.in/images/Creative-Production/2.png" alt="">
                                                        </div>
                                                        <a class="text" href="Employee-Engagement-&-Rewards.php">Employee Engagement &
                                                Rewards</a>
                                                        <div class="btn-area1">
                                                            <a class="theme-btn2" href="Employee-Engagement-&-Rewards.php"><span
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
                                                            <img src="https://auctech.in/images/Creative-Production/2.png" alt="">
                                                        </div>
                                                        <a class="text" href="ChannelLoyaltyPrograms.php">Channel Loyalty Programs
                                                           </a>
                                                        <div class="btn-area1">
                                                            <a class="theme-btn2" href="ChannelLoyaltyPrograms.php"><span
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
                                <li> <a href="case-study.php">Case Studies </a></li>
                                <li> <a href="blogs.php">Blogs</a></li>
                                <li> <a href="contact.php" class=" d-lg-none">Contact Us</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-6">
                    <div class="vl-header1-btns text-end d-none d-lg-block">
                        <div class="buttons">
                            <a href="contact.php" class="theme-btn1">Contact Us</a>
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
                <a href="https://auctechmarketing.com/" class="header1-logo-block"><img style="height: 70px;" src="assets/img/logo/logo.png"
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
                    <img src="assets/img/icons/footer-contact-icon1.svg" alt="">
                </div>
                <div class="text">
                    <a href="mail:info@auctech.in">info@auctech.in</a>
                </div>
            </div>
            <div class="single-contact-item">
                <div class="icon">
                    <img src="assets/img/icons/footer-contact-icon3.svg" alt="">
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
                <a href="https://www.facebook.com/auctechmarketing" target="_blank">
                  <i class="fa-brands fa-facebook-f"></i>
                </a>
                
                <a href="https://www.instagram.com/auctech.marcom/" target="_blank">
                  <i class="fa-brands fa-instagram"></i>
                </a>
                
                <a href="https://www.linkedin.com/company/auctech-marketing-communications-pvt-ltd" target="_blank">
                  <i class="fa-brands fa-linkedin-in"></i>
                </a>
                
                <a href="https://x.com/auctechmarcom" target="_blank">
                  <i class="fa-brands fa-x-twitter"></i>
                </a>
                
                <a href="https://www.youtube.com/@auctechmarketingcommunication/" target="_blank">
                  <i class="fa-brands fa-youtube"></i>
                </a>
                
                <a href="https://wa.me/919616171814" target="_blank">
                  <i class="fa-brands fa-whatsapp"></i>
                </a>

            </div>
        </div>

    </div>
</div>
<div class="vl-offcanvas-overlay"></div>
<!--===== MOBILE HEADER END =======-->