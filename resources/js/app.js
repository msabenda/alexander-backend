// import './bootstrap';

// // -------------PRELOADING SCRIPT CODES--------------------
// 'use strick';

// // add Event on multiple element

// const addEventOnElements = function (elements, eventType, callback) {

//   for (let i = 0; i < elements.length; i++) {
//     elements[i]. addEventListener(eventType, callback);
//   }
// }


// // Preloading the page

// const loadingElement = documnet.querySelector("[data-loading]");

// window.addEventListener("load", function() {

//   loadingElement.classList.add("loaded");
//   document.body.classList.remove("active");
// });

// -------------PRELOADING SCRIPT CODES--------------------


// ---------------------SCRIPT FOR UP-SCROLL BTN----------------------

// const backTopBtn = document.querySelector("[data-back-top-btn]");

// window.addEventListener("scroll", function () {
//   const bodyHeight = document.body.scrollHeight;
//   const windowHeight = window.innerHeight;
//   const scrollEndPos = bodyHeight - windowHeight;
//   const totalScrollPercent = (window.scrollY / scrollEndPos) * 100;

//   backTopBtn.textContent = '${totalScrollPercent.toFixed(0)}%';
// });

// -------------------SCRIPT USER SCROLL DOWN IMMEDIATELY-----------------------
window.addEventListener("scroll", function() {
    const backTopBtn = document.querySelector(".back-top-btn");
    if (window.scrollY > 0) {
      backTopBtn.classList.add("show");
    } else {
      backTopBtn.classList.remove("show");
    }
  });
  // -------------------SCRIPT USER SCROLL DOWN IMMEDIATELY-----------------------
  
  
  
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
  
  
  
  
  // --------DISPLAY EFFECT IN HOME PAGE-----------
  function findelem(tag, text) {
    var x = document.getElementsByTagName(tag);
    for (var i = 0; i < x.length; i++) {
      if (x[i].innerHTML == text) {
        return x[i];
      }
    }
    return null;
  }
  
  function wrapWords (text) {
    words = text.innerHTML.split(" ");
    text.innerHTML = "";
    for (var i = 0; i < words.length; i++) {
      text.innerHTML += "<span style = \"opacity: 0; position: relative; top: 30px;\">" + words[i] +  " " + "</span>";
    }
    return text.children
  }
  function animatetext (wordarr) {
    anime({
      targets: wordarr,
      translateY: -30,
      duration: 3000,
      opacity: 1,
      delay: anime.stagger(1000),
    });
  }
  
  window.onload = function () {
    x = findelem("h1", "Hi, Welcome to Xander Creative");
    xarr = wrapWords(x);
    animatetext(xarr);
  }
  // --------DISPLAY EFFECT IN HOME PAGE-----------
  
  // --------------------------AUTO TYPING WORDS----------------------
  var typed = new Typed(".auto-type", {
      strings: ["Expert Graphic Design", "Digital Marketing", "Motion Graphics"],
      typeSpeed: 300,
      backSpeed: 10,
      loop: true,
    });
  // --------------------------AUTO TYPING WORDS----------------------
  
  
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
  
  
  // ScrollReveal().reveal(".about__container img", {
  //   ...scrollRevealOption,
  //   delay: 1500,
  // });
  
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
  
  const swiper = new Swiper(".swiper", {
    loop: true,
    pagination: {
      el: ".swiper-pagination",
    },
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
  
  // Appearance of Education from left
  ScrollReveal().reveal('.education', {
    ...scrollRevealOption,
    origin: 'left',
    distance: '60px',
    interval: 300, 
    delay: 800,
  });
  
  // Appearance of Education from right
  ScrollReveal().reveal('.experience', {
    ...scrollRevealOption,
    origin: 'right',
    distance: '60px',
    interval: 300, 
    delay: 800,
  });
  
  
  // Appearance of Education from right
  // ScrollReveal().reveal('.skills', {
  //   ...scrollRevealOption,
  //   origin: 'bottom',
  //   distance: '60px',
  //   interval: 300, 
  //   delay: 800,
  // });
  
  
  
  
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
  
  
  ScrollReveal().reveal(".blog__content .section__header", {
    ...scrollRevealOption,
  });
  ScrollReveal().reveal(".blog__content h4", {
    ...scrollRevealOption,
    delay: 500,
  });
  ScrollReveal().reveal(".blog__content p", {
    ...scrollRevealOption,
    delay: 1000,
  });
  ScrollReveal().reveal(".blog__content .blog__btn", {
    ...scrollRevealOption,
    delay: 1500,
  });
  
  const instagram = document.querySelector(".instagram__flex");
  
  Array.from(instagram.children).forEach((item) => {
    const duplicateNode = item.cloneNode(true);
    duplicateNode.setAttribute("aria-hidden", true);
    instagram.appendChild(duplicateNode);
  });
  
  
  // Cursor effect element
  // Create the cursor element
  const cursor = document.createElement('div');
  cursor.classList.add('cursor');
  document.body.appendChild(cursor);
  
  // Update the position of the cursor on mouse move
  document.addEventListener('mousemove', (e) => {
    cursor.style.left = e.pageX + 'px';
    cursor.style.top = e.pageY + 'px';
  });
  
