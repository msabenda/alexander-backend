
<style>
   #particles-js {
      position: absolute;
      /* position: relative; */
      width: 100%;
      height: auto;
      /* background-color: #2b2b2b; */
      background: transparent;
      z-index:-5;
    }

</style>

  <!-- resources/views/components/home-secphption.blade.php -->
<header class="header" id="home">

  <!-- Particle container -->
  <div id="particles-js"></div>
  <!-- <h1>Hello, Particles.js!</h1> -->


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

<!-- Header Text -->
<div class="header-text">
  <h1>Welcome to <span style="color: rgb(255,215,0)">Xander Creative</span></h1>
</div> 

<!-- Typing Animation -->
<div class="typing">
  <strong><span style="color: rgb(255,215,0);" class="auto-type">Graphics Design | Data Analysis | Digital Marketing </span></strong>
</div>

<!-- Home Paragraph -->
<div>
  <p class="home-paragraphy">
    I’m a freelancer, dedicated to transforming your ideas into captivating designs, <br> powerful strategies, 
    and data-driven solutions. <br> Together, we’ll bring your vision to life and make it unforgettable.
  </p>
</div>

<!-- Social Media Icons -->
<div class="social-media">
  <a href="https://web.facebook.com/" target="_blank" class="facebook-icon"><i class="fa-brands fa-facebook"></i></a>
  <a href="https://twitter.com/" target="_blank" class="twitter-icon"><i class="fa-brands fa-x-twitter"></i></a>
  <a href="https://www.instagram.com/" target="_blank" class="instagram-icon"><i class="fa-brands fa-square-instagram"></i></a>
  <a href="https://www.whatsapp.com/" target="_blank" class="whatsapp-icon"><i class="fa-brands fa-square-whatsapp"></i></a>
  <a href="https://www.linkedin.com/" target="_blank" class="linkedin-icon"><i class="fa-brands fa-linkedin"></i></a>
  <a href="https://www.dribbble.com/" target="_blank" class="dribbble-icon"><i class="fab fa-dribbble"></i></a>
  <a href="https://www.behance.com/" target="_blank" class="behance-icon"><i class="fab fa-behance"></i></a>
</div>

</header>




  <!-- Particles.js configuration -->
  <script>
    window.addEventListener("load", () => {
    particlesJS("particles-js", {
      "particles": {
        "number": {
          "value": 100,
          "density": {
            "enable": true,
            "value_area": 800
          }
        },
        "color": {
          "value": "#ffff00"
        },
        "shape": {
          "type": "circle",
          "stroke": {
            "width": 0,
            "color": "#ffff00"
          }
        },
        "opacity": {
          "value": 0.8,
          "random": true
        },
        "size": {
          "value": 3,
          "random": true
        },
        "line_linked": {
          "enable": true,
          "distance": 150,
          "color": "#ffff00",
          "opacity": 0.6,
          "width": 1
        },
        "move": {
          "enable": true,
          "speed": 6,
          "direction": "none",
          "random": false,
          "straight": false,
          "out_mode": "out",
          "bounce": false
        }
      },
      "interactivity": {
        "detect_on": "canvas",
        "events": {
          "onhover": {
            "enable": true,
            "mode": "repulse"
          },
          "onclick": {
            "enable": true,
            "mode": "push"
          }
        }
      },
      "retina_detect": true
    });
  });
  </script>


