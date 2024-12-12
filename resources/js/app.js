import './swiper-bundle.min.js';
import './video-section.js';
import 'intl-tel-input/build/css/intlTelInput.css';

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

// Moving Particles on Home page
/* particlesJS.load(@dom-id, @path-json, @callback (optional)); */
// particlesJS.load('particles-js', '/particles.json', function() {
//   console.log('callback - particles.js config loaded');
// });

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

// Scroll Reveal Animations
ScrollReveal().reveal(".about-left", {
  ...scrollRevealOption,
});
ScrollReveal().reveal(".about-left", {
  ...scrollRevealOption,
  delay: 500,
  interval: 500,
});

ScrollReveal().reveal('.scroll-reveal.from-right', {
  distance: '10px',
  origin: 'right',
  duration: 3000,
  easing: 'ease-out'
});

// ScrollReveal().reveal(".service__container .section__header", {
//   ...scrollRevealOption,
// });
// ScrollReveal().reveal(".service__container .section__description", {
//   ...scrollRevealOption,
//   delay: 500,
// });
// ScrollReveal().reveal(".service-card", {
//   duration: 1000,
//   delay: 1000,
//   interval: 500,
// });

ScrollReveal().reveal('.about-section', {
  ...scrollRevealOption,
  origin: 'top',
  distance: '70px',
  duration: 1000,
});

ScrollReveal().reveal('.nav-bar', {
  ...scrollRevealOption,
  origin: 'top',
  distance: '70px',
  duration: 1000,
});

ScrollReveal().reveal('.social-media', {
  ...scrollRevealOption,
  origin: 'bottom',
  distance: '70px',
  duration: 1000,
});

// Effect on Quote
ScrollReveal().reveal('.quote', {
  ...scrollRevealOption,
  origin: 'right',
  distance: '60px',
  interval: 300,
  delay: 800,
});

// Rotate and scale effect
ScrollReveal().reveal('.btn-container', {
  distance: '0px',
  duration: 1000,
  easing: 'ease-in-out',
  scale: 0.85,
  rotate: { x: 0, y: 0, z: 10 },
  opacity: 0,
  interval: 300,
});

ScrollReveal().reveal('.social-media', {
  ...scrollRevealOption,
  origin: 'bottom',
  distance: '70px',
  duration: 1000,
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

// Magnific Popup for project images
$(".project").magnificPopup({
  delegate: 'a',
  type: "image",
  picture: {
    enabled: true
  }
});

// Swiper Initialization
document.addEventListener('DOMContentLoaded', () => {
  var swiper = new Swiper(".mySwiper", {
    slidesPerView: 1,
    grabCursor: true,
    loop: true,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });
});
