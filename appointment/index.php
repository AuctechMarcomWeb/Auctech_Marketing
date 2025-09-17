<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <title>Auctech MarCom</title>
  <!--=====FAB ICON=======-->
  <link rel="shortcut icon" href="new-logo.png" type="image/x-icon">
  <link rel="stylesheet" href="style.css">

</head>

<body>
  <!-- Navbar -->
  <nav class="navbar">
    <div class="navbar-container">
      <img src="new-logo.png" alt="logo" class="logo" />
    </div>
  </nav>

  <!-- Banner -->
  <div class="banner">
    <div class="particles"></div>


    <div class="float-sm ">
      <div class="fl-fl float-fb">
        <i class="fa fa-facebook"></i>
        <a href="https://www.facebook.com/auctechmarketing" target="_blank" style="color: white;">
          Like us!</a>
      </div>
      <div class="fl-fl float-tw">
        <img class=" fa-twitter" src="https://img.icons8.com/ios-filled/ffffff/twitterx--v2.png" alt="twitterx--v2"
          height="25" width="25">
        <a href="https://twitter.com/auctechmarcom" target="_blank" style="color: white; ">
          Follow us!</a>
      </div>

      <div class="fl-fl float-rs">
        <i class="fa fa-linkedin"></i>
        <a href="https://www.linkedin.com/company/auctech-marketing-communications-pvt-ltd" target="_blank"
          style="color: white; ">Follow us !</a>
      </div>
      <div class="fl-fl float-ig">
        <i class="fa fa-instagram"></i>
        <a href="https://www.instagram.com/auctech.marcom/" target="_blank" style="color: white; ">Follow us!</a>
      </div>
      <div class="fl-fl float-wh">
        <i class="fa fa-whatsapp"></i>
        <a href="https://wa.me/916386452123" target="_blank" style="color: white; ">Follow us!</a>
      </div>
    </div>


    <div class="container">
      <div class="content">
        <div class="welcome-text">WELCOME TO AUCTECH MARCOM</div>

        <h1 class="main-heading">
          <span class="highlight">Provide</span> Best<br />
          Business Solutions<br />

        </h1>

        <p class="description">

          From software development to digital marketing, branding, and mobile app development, we provide cutting-edge
          services designed to meet your needs.
        </p>

        <div class="buttons" style="align-items: center;">
          <a href="#contact-now">
            <button class="get-started-btn">Contact Us</button>
          </a>
          <a href="#about">
            <button class="get-started-btn-2 auctech-color-2 " style="border: 2px solid white; color: white;">About
              Us</button>
          </a>
        </div>
      </div>

      <div class="image-section">
        <div class="professional-image">
          <img src="hero-img.png" alt="" style="height: 100%; object-fit: contain" />
        </div>
        <div class="experience-badge">
          <div class="experience-number">13+</div>
          <div class="experience-text">
            Years of experience<br />

          </div>
        </div>
      </div>
    </div>
  </div>

  <script>
    // Create floating particles
    function createParticles() {
      const particlesContainer = document.querySelector(".particles");
      const particleCount = 50;

      for (let i = 0; i < particleCount; i++) {
        const particle = document.createElement("div");
        particle.className = "particle";

        const size = Math.random() * 4 + 2;
        particle.style.width = size + "px";
        particle.style.height = size + "px";
        particle.style.left = Math.random() * 100 + "%";
        particle.style.animationDelay = Math.random() * 15 + "s";
        particle.style.animationDuration = Math.random() * 10 + 10 + "s";

        particlesContainer.appendChild(particle);
      }
    }

    // Counter animation
    function animateCounter() {
      const counter = document.querySelector(".experience-number");
      const target = 25;
      let current = 0;
      const increment = target / 50;
      const timer = setInterval(() => {
        current += increment;
        if (current >= target) {
          current = target;
          clearInterval(timer);
        }
        counter.textContent = Math.floor(current) + "+";
      }, 40);
    }

    // Enhanced button interactions
    function setupInteractions() {
      const getStartedBtn = document.querySelector(".get-started-btn");
      const introBtn = document.querySelector(".intro-btn");
      const floatingIcons = document.querySelectorAll(".floating-icon");

      getStartedBtn.addEventListener("click", function () {
        this.style.transform = "scale(0.95)";
        setTimeout(() => {
          this.style.transform = "translateY(-3px)";
        }, 150);
      });

      introBtn.addEventListener("click", function () {
        this.style.animation = "none";
        setTimeout(() => {
          this.style.animation = "";
        }, 10);
      });

      // Floating icons interaction
      floatingIcons.forEach((icon, index) => {
        icon.style.animationDelay = index * 0.5 + "s";
        icon.addEventListener("click", function () {
          this.style.animation = "bounceIn 0.6s ease";
          setTimeout(() => {
            this.style.animation = "floatIcon 3s ease-in-out infinite";
            this.style.animationDelay = index * 0.5 + "s";
          }, 600);
        });
      });
    }

    // Scroll effects
    function setupScrollEffects() {
      const navbar = document.querySelector(".navbar");
      window.addEventListener("scroll", () => {
        if (window.scrollY > 50) {
          navbar.style.background = "rgba(255, 255, 255, 0.98)";
          navbar.style.boxShadow = "0 4px 30px rgba(0,0,0,0.2)";
        } else {
          navbar.style.background = "rgba(255, 255, 255, 0.95)";
          navbar.style.boxShadow = "0 2px 30px rgba(0,0,0,0.1)";
        }
      });
    }

    // Initialize everything
    document.addEventListener("DOMContentLoaded", function () {
      createParticles();
      setupInteractions();
      setupScrollEffects();

      setTimeout(() => {
        animateCounter();
      }, 2000);
    });
  </script>

  <!-- About Us Section Start -->

  <div class="background-effects">
    <div class="bg-circle"></div>
    <div class="bg-circle"></div>
  </div>

  <div class="container" style="margin: 15px auto;" id="about">
    <div class="hero-section">
      <div class="hero-content">
        <div class="badge">About Us</div>

        <h1 class="hero-title">
          Provide Best Business
          <span class="highlight-2 auctech-color ">Solutions</span>
        </h1>

        <p class="hero-description">
          Auctech Marcom is a global strategic management consulting group that serves leading businesses,
          multi-national companies, small and medium enterprises, NGO's and start-ups.
        </p>
        <p class="hero-description">
          We help our clients by result-oriented cutting-edge solutions. Auctech Marcom with its unique business model
          serves the clients by catering to cross functional consulting and marketing requirements.
        </p>

        <div class="services-grid">
          <div class="service-item">
            <div class="service-icon"></div>
            <span class="service-text">Strategic Financial Planning</span>
          </div>
          <div class="service-item">
            <div class="service-icon"></div>
            <span class="service-text">Expert Investment Advisory</span>
          </div>
          <div class="service-item">
            <div class="service-icon"></div>
            <span class="service-text">Risk Assessment & Mitigation</span>
          </div>
          <div class="service-item">
            <div class="service-icon"></div>
            <span class="service-text">Retirement & Future Planning</span>
          </div>
        </div>

        <a href="#contact-now" class="cta-button"> Contact Now </a>
      </div>

      <div class="hero-visual">
        <div class="main-image"></div>

        <div class="floating-card experience-card">
          <div class="experience-number">13+</div>
          <div class="experience-text">
            Years of experience
          </div>
        </div>
      </div>
    </div>
  </div>

  <script>
    // Add smooth scrolling for CTA button


    // Add parallax effect to floating cards
    document.addEventListener("mousemove", function (e) {
      const cards = document.querySelectorAll(".floating-card");
      const mouseX = e.clientX / window.innerWidth;
      const mouseY = e.clientY / window.innerHeight;

      cards.forEach((card, index) => {
        const speed = (index + 1) * 0.5;
        const x = (mouseX - 0.5) * speed;
        const y = (mouseY - 0.5) * speed;

        card.style.transform = `translate(${x}px, ${y}px)`;
      });
    });

    // Animate service items on scroll
    const observeElements = () => {
      const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            entry.target.style.opacity = "1";
            entry.target.style.transform = "translateY(0)";
          }
        });
      });

      document.querySelectorAll(".service-item").forEach((item, index) => {
        item.style.opacity = "0";
        item.style.transform = "translateY(20px)";
        item.style.transition = `all 0.6s ease ${index * 0.1}s`;
        observer.observe(item);
      });
    };

    // Initialize animations when page loads
    document.addEventListener("DOMContentLoaded", observeElements);
  </script>

  <!-- About Us Section End -->

  <!-- services section -->
  <div style="background: #e8e6e6">
    <div class="container-2">
      <div class="header">
        <div class="badge">Our Services</div>
        <h1 class="hero-title">
          Smart Branding & High-Impact
          <span class="highlight-2  ">Digital<br />Solutions</span>
        </h1>
      </div>

      <div class="features-grid">
        <div class="feature-card">
          <div class="feature-icon">
            <img width="50" height="50" src="https://img.icons8.com/ios/50/FA5252/positive-dynamic.png"
              alt="positive-dynamic" />
          </div>
          <h3 class="feature-title auctech-color ">Branding & Digital PR Consulting</h3>
          <p class="feature-description">
            We build your brand image and manage public presence. Our plans boost trust, reach, and visibility.
          </p>
        </div>

        <div class="feature-card">
          <div class="feature-icon">
            <img width="50" height="50" src="https://img.icons8.com/ios/50/FA5252/speaker_1.png" alt="speaker_1" />
          </div>
          <h3 class="feature-title auctech-color ">Digital Marketing Consulting</h3>
          <p class="feature-description">
            We plan result-driven digital strategies for your business. From content to ads, we guide you to grow
            online.
          </p>
        </div>

        <div class="feature-card">
          <div class="feature-icon">
            <img width="50" height="50"
              src="https://img.icons8.com/external-goofy-line-kerismaker/50/FA5252/external-Social-Media-Marketing-marketing-goofy-line-kerismaker.png"
              alt="external-Social-Media-Marketing-marketing-goofy-line-kerismaker" />
          </div>
          <h3 class="feature-title auctech-color ">Social Media Marketing (SMM)</h3>
          <p class="feature-description">
            We grow your brand on platforms like Facebook & Instagram. From posts to ads, we manage it all for better
            reach.
          </p>
        </div>

        <div class="feature-card">
          <div class="feature-icon">
            <img width="50" height="50" src="https://img.icons8.com/dotty/50/FA5252/search.png" alt="search" />
          </div>
          <h3 class="feature-title auctech-color ">Search Engine Marketing (SEM)</h3>
          <p class="feature-description">
            We run paid ads on Google to drive instant traffic. Targeted keywords help reach the right audience fast.
          </p>
        </div>

        <div class="feature-card">
          <div class="feature-icon">
            <img width="50" height="50"
              src="https://img.icons8.com/external-outline-black-m-oki-orlando/32/FA5252/external-seo-services-seo-outline-black-m-oki-orlando.png"
              alt="external-seo-services-seo-outline-black-m-oki-orlando" />
          </div>
          <h3 class="feature-title auctech-color ">SEO Services</h3>
          <p class="feature-description">
            We improve your website’s Google ranking with smart SEO. Better ranking means more clicks, leads, and
            growth.
          </p>
        </div>

        <div class="feature-card">
          <div class="feature-icon">
            <img width="60" height="60"
              src="https://img.icons8.com/external-smashingstocks-detailed-outline-smashing-stocks/66/FA5252/external-pay-per-click-banking-and-finance-smashingstocks-detailed-outline-smashing-stocks.png"
              alt="external-pay-per-click-banking-and-finance-smashingstocks-detailed-outline-smashing-stocks" />
          </div>
          <h3 class="feature-title auctech-color ">Pay-Per-Click Services (PPC)</h3>
          <p class="feature-description">
            We manage paid ads to get high-quality leads. You pay only when someone clicks your ad.
          </p>
        </div>
        <div class="feature-card">
          <div class="feature-icon">
            <img width="50" height="50" src="https://img.icons8.com/dotty/50/FA5252/domain.png" alt="domain" />
          </div>
          <h3 class="feature-title auctech-color ">Website Development</h3>
          <p class="feature-description">
            We create fast, modern, and mobile-friendly websites. From design to deployment, we handle everything.
          </p>
        </div>
        <div class="feature-card">
          <div class="feature-icon">
            <img width="40" height="40"
              src="https://img.icons8.com/external-tal-revivo-regular-tal-revivo/24/FA5252/external-the-smartphone-with-a-programming-feature-for-web-development-development-regular-tal-revivo.png"
              alt="external-the-smartphone-with-a-programming-feature-for-web-development-development-regular-tal-revivo" />
          </div>
          <h3 class="feature-title auctech-color ">Mobile App Development</h3>
          <p class="feature-description">
            We build custom apps for Android and iOS users. User-friendly, secure, and built to scale with ease
          </p>
        </div>
        <div class="feature-card">
          <div class="feature-icon">
            <img width="50" height="50" src="https://img.icons8.com/ios/50/FA5252/e-commerce.png" alt="e-commerce" />
          </div>
          <h3 class="feature-title auctech-color ">E-commerce Solutions</h3>
          <p class="feature-description">
            We develop online stores that help you sell more. From cart to checkout, everything runs smoothly.
          </p>
        </div>
      </div>
    </div>
  </div>

  <!-- conatct start -->
  <div style="display: flex; justify-content: center" id="contact-now">
    <div class="contact-container">
      <div class="image-section-contact"></div>

      <div class="form-section">
        <div class="contact-header">
          <div class="badge">CONTACT US</div>
          <h1 class="hero-title">
            Get in Touch <span class="highlight auctech-color ">with Us</span>
          </h1>
          <p class="contact-description">
            Have questions or need assistance? Reach out to us today! We're
            here to provide expert solutions and friendly support.
          </p>
        </div>

        <form class="contact-form" id="enqueryForm">
          <div class="form-grid">
            <div class="form-group">
              <input type="text" name="name" id="name" class="form-input" placeholder="Enter Name" required />
            </div>

            <div class="form-group">
              <input type="number" name="phone" id="phone" class="form-input" placeholder="Phone no" required maxlength="10"/>
            </div>
            <div class="form-group full-width">
              <input type="email" name="email" id="email" class="form-input" placeholder="E-mail address" required />
            </div>
            <div class="form-group full-width">
              <textarea class="form-input" placeholder="Message" name="message" required></textarea>
            </div>
          </div>

          <button type="submit" class="submit-btn">Sumbit Now</button>
        </form>
      </div>
    </div>
  </div>



  <!-- Single Line Footer -->
  <footer class="single-footer text-center">
    <div class="" style="display: flex; justify-content: center">
      <p>© 2025 Auctech MarCom — All Rights Reserved</p>
    </div>
  </footer>
  <div class="sticky-footer res-dd-none">
    <!-- Left Section: Phone Number -->
    <a href="https://wa.me/916386452123" class="phone-link" target="_blank">
      <img width="25" height="25" src="https://img.icons8.com/ios-filled/50/f0571f/whatsapp--v1.png" alt="whatsapp--v1">
      +91-6386452123
    </a>
    <!-- Right Section: Request a Demo Button -->
    <a class="demo-btn" onclick="openPopup()">Book Appointment </a>

  </div>

  <!-- SweetAlert2 CDN -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <!-- Popup Form -->
  <div class="overlay" id="overlay" onclick="closePopup()">
    <div class="popup" onclick="event.stopPropagation()">
      <button class="close-btn" onclick="closePopup()">&times;</button>

      <div id="form-container">
        <div class="popup-header">
          <h2 class="popup-title">Book Your Appointment</h2>
          <p class="popup-subtitle">Fill in the details below to schedule your visit</p>
        </div>

        <form id="appointmentForm">
          <div class="form-group">
            <label for="email">Email Address *</label>
            <input type="email" id="email" name="email" required placeholder="Enter Email">
          </div>

          <div class="form-group">
            <label for="phone">Phone Number *</label>
            <input type="tel" name="phone" id="phone" required maxlength="10" placeholder="Enter Phone Number">
          </div>

          <div class="form-row">
            <div class="form-group">
              <label for="date">Preferred Date *</label>
             <input type="date" id="date" name="date" required onkeydown="return false;" onpaste="return false;">
            </div>
            <div class="form-group">
              <label for="time">Preferred Time *</label>
              <input type="time" id="time" name="time" required onkeydown="return false;" onpaste="return false;">
            </div>
          </div>

          <div class="form-group">
            <label for="service_type">Service Type *</label>
            <select id="service_type" name="service_type" required>
              <option value="">Select Service</option>
              <option value="Branding & Digital PR Consulting">Branding & Digital PR Consulting</option>
              <option value="Digital Marketing Consulting">Digital Marketing Consulting</option>
              <option value="Social Media Marketing (SMM)">Social Media Marketing (SMM)</option>
              <option value="Website Development">Website Development</option>
              <option value="Mobile App Development">Mobile App Development</option>
              <option value="SEO Services">SEO Services</option>
              <option value="Pay-Per-Click Services (PPC)">Pay-Per-Click Services (PPC)</option>
              <option value="Search Engine Marketing (SEM)">Search Engine Marketing (SEM)</option>
              <option value="Other">Other</option>
            </select>
          </div>

          <div class="form-group">
            <label for="message">Your Message (Optional)</label>
            <textarea id="message" name="message" rows="3"
              placeholder="Any specific concerns or requests..."></textarea>
          </div>

          <button type="submit" class="submit-btn">Book Appointment</button>
        </form>
      </div>
    </div>
  </div>

  <script>
    // ---------------- Popup Open/Close ----------------
    function openPopup() {
      document.getElementById('overlay').style.display = 'flex';
      document.body.style.overflow = 'hidden';
    }

    function closePopup() {
      document.getElementById('overlay').style.display = 'none';
      document.body.style.overflow = 'auto';
      // Reset form
      document.getElementById('appointmentForm').reset();
    }

    window.addEventListener('load', () => setTimeout(openPopup, 1000));
    document.addEventListener('keydown', e => { if (e.key === 'Escape') closePopup(); });

    // ---------------- Date & Time Restriction ----------------
    const dateInput = document.getElementById("date");
    const timeInput = document.getElementById("time");
    dateInput.min = new Date().toISOString().split("T")[0];

    function checkTime() {
      const selectedDate = dateInput.value;
      const now = new Date();
      if (!selectedDate) return;
      const today = now.toISOString().split("T")[0];

      if (selectedDate === today) {
        const hours = now.getHours().toString().padStart(2, '0');
        const minutes = now.getMinutes().toString().padStart(2, '0');
        const minTime = `${hours}:${minutes}`;
        timeInput.min = minTime;
        timeInput.max = "23:59";
        if (timeInput.value && timeInput.value < minTime) {
          timeInput.value = "";
          Swal.fire({ icon: 'warning', title: 'Invalid Time', text: 'The selected time has already passed. Please choose a time after the current time.' });
        }
      } else {
        timeInput.min = "00:00";
        timeInput.max = "23:59";
      }
    }

    dateInput.addEventListener("change", checkTime);
    timeInput.addEventListener("change", checkTime);

    // ---------------- Phone Validation & AJAX Submission ----------------
    document.getElementById('appointmentForm').addEventListener('submit', function (e) {
      e.preventDefault();

      const formData = new FormData(this);

      fetch('https://auctechmarketing.com/appointment.php', {
        method: 'POST',
        body: formData
      })
        .then(res => res.text())
        .then(result => {
          if (result.includes('success')) {
            Swal.fire({
              icon: 'success',
              title: 'Appointment Booked!',
              html: '<p>We have received your appointment request. You will receive a confirmation email shortly.!</p>'
            }).then(() => closePopup());
          } else {
            Swal.fire({ icon: 'error', title: 'Error', text: result });
          }
        })
        .catch(() => Swal.fire({ icon: 'error', title: 'Error', text: 'Something went wrong.' }));
    });
  </script>
  <script>
    document.getElementById('enqueryForm').addEventListener('submit', function (e) {
      e.preventDefault();

      const phone = document.getElementById('phone').value.trim();
      if (!/^\d{10}$/.test(phone)) {
        Swal.fire({ icon: 'warning', title: 'Invalid Phone', html: '<p>Phone number must be exactly 10 digits.</p>' });
        return;
      }

      const formData = new FormData(this);
      const form = this; // reference for reset later

      fetch('https://auctechmarketing.com/service.php', {
        method: 'POST',
        body: formData
      })
        .then(res => res.text())
        .then(result => {
          if (result.includes('success')) {
            Swal.fire({
              icon: 'success',
              title: 'Thank You!',
              html: '<p>Thanks for reaching out! Our team will review your request and contact you soon.</p>'
            }).then(() => {
              form.reset();  
              closePopup(); 
            });
          } else {
            Swal.fire({ icon: 'error', title: 'Error', text: result });
          }
        })
        .catch(() => Swal.fire({ icon: 'error', title: 'Error', text: 'Something went wrong.' }));
    });

  </script>

</body>

</html>