 
 <!-- resources/views/components/home-section.blade.php -->
 <!-- -------------------------------------------HEADING SECTION PART-------------------------------------- -->
 <header class="header" id="home">
      <nav class="nav-bar">
        <div class="nav__header">
          <div class="nav__logo">
            <a href="#">
              <img src="{{ url('/images/gold-logo.png') }}" alt="logo" />
            </a>
          </div>
          <div class="nav__menu__btn" id="menu-btn">
            <i class="fa-solid fa-bars"></i>
          </div>
        </div>
        <ul class="nav__links" id="nav-links">
          <li><a href="#home" id="home-nav">HOME</a></li>
          <li><a href="#about" id="about-nav">ABOUT</a></li>
          <li><a href="#servi" id="service-nav">SERVICES</a></li>
          <li class="nav__logo">
            <a href="#">
              <img src="{{ url('images/gold-logo.png') }}" alt="logo" />
            </a>
          </li>
          <li><a href="#blog" id="blog-nav">BLOG</a></li>
          <li><a href="#testimonial" id="testimonials-nav">TESTIMONIALS</a></li>
          <li><a href="#contact" id="contact-nav">CONTACT</a></li>
        </ul>
      </nav>
      <div class="header-text">
        <h1>Hi, Welcome to Xander Creative</h1>
      </div> 

      <div class="typing">
        <strong><span style="color: rgb(255,215,0);"  class="auto-type">Expert Graphic Design, Digital Marketing, Motion Graphics</span></strong>
      </div>
      
      <div class="social-media">
        <a href="https://web.facebook.com/" target="_blank" class="facebook-icon"><i class="fa-brands fa-facebook"></i></a>
        <a href="https://twitter.com/" target="_blank" class="twitter-icon"><i class="fa-brands fa-x-twitter"></i></a>
        <a href="https://www.instagram.com/" target="_blank" class="instagram-icon"><i class="fa-brands fa-square-instagram"></i></a>
        <a href="https://www.whatsapp.com/" target="_blank" class="whatsapp-icon"><i class="fa-brands fa-square-whatsapp" target="_blank"></i></a>
        <a href="https://www.linkedin.com/" target="_blank" class="linkedin-icon"><i class="fa-brands fa-linkedin"></i></a>
        <a href="https://www.dribbble.com/" target="_blank" class="dribbble-icon"><i class="fab fa-dribbble"></i></a>
        <a href="https://www.behance.com/" target="_blank" class="behance-icon"><i class="fab fa-behance"></i></a>
      </div>

    </header> <!-- Header ends here-->
