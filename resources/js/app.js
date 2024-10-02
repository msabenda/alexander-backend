import './swiper-bundle.min.js';
import './video-section.js';
import 'intl-tel-input/build/css/intlTelInput.css';

import intlTelInput from 'intl-tel-input';
import 'intl-tel-input/build/css/intlTelInput.css';

// Initialize the input field with the intl-tel-input plugin
const input = document.querySelector("#phoneInput");
intlTelInput(input, {
  initialCountry: "tz", // Set Tanzania as the default country
  utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@17.0.8/build/js/utils.js" // load utils script
});



document.addEventListener('DOMContentLoaded', () => {
  const slider = document.getElementById('brandSlider');
  const totalLogos = slider.children.length;
  const logoWidth = 150; // Adjust based on your logo size
  const totalWidth = logoWidth * totalLogos;
  let offset = 0;

  function animate() {
      offset -= 0.5; // Adjust speed here
      if (Math.abs(offset) >= totalWidth) {
          offset = 0; // Reset to start when logos are out of view
      }
      slider.style.transform = `translateX(${offset}px)`;
      requestAnimationFrame(animate);
  }

  animate();
});





// import 'swiper/swiper-bundle.min.css';
// ---------------------SCRIPT FOR UP-SCROLL BTN----------------------
document.addEventListener('scroll', () => {
  const topBtn = document.querySelector('.top-btn');
  if (window.scrollY > 200) { // Change 200 to the scroll position where you want to show the button
      topBtn.classList.add('show');
  } else {
      topBtn.classList.remove('show');
  }
});

// --------------------------------------ANIMATION EFFECT-------------------------------

const menuBtn = document.getElementById("menu-btn");
const navLinks = document.getElementById("nav-links");
const menuBtnIcon = menuBtn.querySelector("i");

menuBtn.addEventListener("click", (e) => {
  navLinks.classList.toggle("open");

  const isOpen = navLinks.classList.contains("open");
  menuBtnIcon.setAttribute("class", isOpen ? "ri-close-line" : "ri-menu-line");
});

navLinks.addEventListener("click", (e) => {
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

ScrollReveal().reveal(".about-left", {
  ...scrollRevealOption,
});
ScrollReveal().reveal(".about-left", {
  ...scrollRevealOption,
  delay: 500,
  interval: 500,
});

// Reveal animation configuration from right (Picture ya Alex)
ScrollReveal().reveal('.scroll-reveal.from-right', {
  distance: '10px',   // Distance from which the element will appear
  origin: 'right',      // Origin of the reveal ('right' to appear from the right)
  duration: 3000,     // Animation duration in milliseconds
  easing: 'ease-out'  // Animation easing function (optional)
});

ScrollReveal().reveal(".service__container .section__header", {
  ...scrollRevealOption,
});
ScrollReveal().reveal(".service__container .section__description", {
  ...scrollRevealOption,
  delay: 500,
});
ScrollReveal().reveal(".service__card", {
  duration: 1000,
  delay: 1000,
  interval: 500,
});


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
  interval: 300, // Stagger the appearance of each card
  delay: 800,
});

// Rotate and scale effect
ScrollReveal().reveal('.btn-container', {
  distance: '0px', // No translation movement
  duration: 1000, // Duration of the animation
  easing: 'ease-in-out', // Easing function
  scale: 0.85, // Start with 85% scale
  rotate: { x: 0, y: 0, z: 10 }, // Rotate slightly on the Z-axis
  opacity: 0, // Start with an opacity of 0 (invisible)
  interval: 300, // Staggered appearance for multiple elements
});

// Cursor effect element
const cursor = document.createElement('div');
cursor.classList.add('cursor');
document.body.appendChild(cursor);

// Update the position of the cursor on mouse move
document.addEventListener('mousemove', (e) => {
  cursor.style.left = e.pageX + 'px';
  cursor.style.top = e.pageY + 'px';
});

// --------------Media Query on small scree-------------
document.getElementById("menu-btn").addEventListener("click", function() {
  var navLinks = document.getElementById("nav-links");
  navLinks.classList.toggle("show");
});

// -------Top Up Button------
document.addEventListener('DOMContentLoaded', function() {
  const backTopBtn = document.querySelector('.top-btn');
  
  window.addEventListener('scroll', function() {
    if (window.scrollY > 100) { // Show button when scrolled more than 100px
      backTopBtn.classList.add('show');
    } else {
      backTopBtn.classList.remove('show');
    }
  });
});

$(".project").magnificPopup({
  delegate: 'a',
  type: "image",
  picture: {
    enabled: true
  }
});

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




