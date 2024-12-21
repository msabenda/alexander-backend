import Swiper from 'swiper';
import './swiper-bundle.min.js';
import './video-section.js';
import 'intl-tel-input/build/css/intlTelInput.css';


// import './jquery.min.js';
import './typed.umd.js';
// import './all.min.js';
// import './particles.min.js';
// import './jquery.magnific-popup.min.js';


import intlTelInput from 'intl-tel-input';
import 'intl-tel-input/build/css/intlTelInput.css';

// Preloader fade-out effect
window.addEventListener("load", () => {
  const preloader = document.getElementById("preloader");
  const content = document.getElementById("content");

  preloader.style.opacity = 0;
  preloader.style.transition = "opacity 1s ease";

  setTimeout(() => {
      preloader.style.display = "none";
  }, 1000);
});

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
        "opacity": 0.4,
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



// Initialize the input field with the intl-tel-input plugin
const input = document.querySelector("#phoneInput");
intlTelInput(input, {
  initialCountry: "tz", // Set Tanzania as the default country
  utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@17.0.8/build/js/utils.js" // load utils script
});

// Scroll to Top Button
const topButton = document.querySelector('.top-btn');
const scrollPercentageText = document.getElementById('scroll-percentage');

const updateScrollButton = () => {
  // Calculate the scroll percentage
  const scrollTop = window.scrollY;
  const docHeight = document.documentElement.scrollHeight - window.innerHeight;
  const scrollPercentage = Math.round((scrollTop / docHeight) * 100);

  // Update the scroll percentage text
  scrollPercentageText.textContent = `${scrollPercentage}%`;

  // Show the button when scrolling down, hide at top
  if (scrollTop > 100) {
    topButton.classList.add('show');
  } else {
    topButton.classList.remove('show');
  }
};

window.addEventListener('scroll', updateScrollButton);

// ---------------------SCRIPT FOR UP-SCROLL BTN----------------------
document.addEventListener('scroll', updateScrollButton);

// --------------------------------------ANIMATION EFFECT-------------------------------
const menuBtn = document.getElementById("menu-btn");
const navLinks = document.getElementById("nav-links");
const menuBtnIcon = menuBtn.querySelector("i");

menuBtn.addEventListener("click", () => {
  navLinks.classList.toggle("open");

  const isOpen = navLinks.classList.contains("open");
  menuBtnIcon.setAttribute("class", isOpen ? "ri-close-line" : "ri-menu-line");
});

navLinks.addEventListener("click", () => {
  navLinks.classList.remove("open");
  menuBtnIcon.setAttribute("class", "ri-menu-line");
});

const scrollRevealOption = {
  distance: "50px",
  origin: "bottom",
  duration: 1000,
};

// --------------------------AUTO TYPING WORDS----------------------
var typed = new Typed(".auto-type", {
  strings: ["Graphics Design |", " Data Analysis |", " Digital Marketing"],
  typeSpeed: 300,
  backSpeed: 10,
  loop: true,
});

// Cursor effect element
const cursor = document.createElement('div');
cursor.classList.add('cursor');
document.body.appendChild(cursor);

document.addEventListener('mousemove', (e) => {
  cursor.style.left = e.pageX + 'px';
  cursor.style.top = e.pageY + 'px';
});

// --------------Media Query on small screen-------------
document.getElementById("menu-btn").addEventListener("click", function() {
  var navLinks = document.getElementById("nav-links");
  navLinks.classList.toggle("show");
});

// -------Top Up Button------
document.addEventListener('DOMContentLoaded', function() {
  const backTopBtn = document.querySelector('.top-btn');
  
  window.addEventListener('scroll', function() {
    if (window.scrollY > 100) {
      backTopBtn.classList.add('show');
    } else {
      backTopBtn.classList.remove('show');
    }
  });
});


// Initialize Swiper with autoplay
const swiper = new Swiper('.mySwiper', {
  loop: true, // Enable looping
  autoplay: {
    delay: 3000, // Time between slides (in milliseconds)
    disableOnInteraction: false, // Allow autoplay to continue even when user interacts
  },
  speed: 1000, // Speed of the transition
  pagination: {
    el: '.swiper-pagination',
    clickable: true, // Make pagination clickable
  },
});

const logosSection = document.querySelector('.logos');
const logosSlide = document.querySelector('.logos-slide');

// IntersectionObserver to pause/resume animation based on visibility
const observer = new IntersectionObserver(
  (entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        logosSlide.style.animationPlayState = 'running';
      } else {
        logosSlide.style.animationPlayState = 'paused';
      }
    });
  },
  { threshold: 0.1 }
);

observer.observe(logosSection);
