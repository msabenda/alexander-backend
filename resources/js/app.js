import './video-section.js';
import 'intl-tel-input/build/css/intlTelInput.css';
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
        "opacity": 0.35,
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


// Client section rendering view
document.addEventListener("DOMContentLoaded", () => {
  const slide = document.querySelector(".logos-slide");
  const logos = Array.from(slide.children);
  const visibleCount = 3; // Number of logos visible at a time
  let currentIndex = 0;

  // Function to update the slide position
  const updateSlidePosition = () => {
    const logoWidth = logos[0].offsetWidth + 20; // Logo width + gap
    const offset = currentIndex * logoWidth;

    // Remove 'center' class from all logos
    logos.forEach((logo) => logo.classList.remove("center"));

    // Add 'center' class to the middle logo
    const middleIndex = currentIndex + Math.floor(visibleCount / 2);
    if (logos[middleIndex]) {
      logos[middleIndex].classList.add("center");
    }

    slide.style.transform = `translateX(-${offset}px)`;
  };

  // Automatically slide logos every 3 seconds
  setInterval(() => {
    currentIndex++;
    if (currentIndex > logos.length - visibleCount) {
      currentIndex = 0; // Reset to the first set of logos
    }
    updateSlidePosition();
  }, 3000); // 3 seconds
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


document.addEventListener('DOMContentLoaded', function () {
  // Select the logos section and the logos slide container
  const logosSection = document.querySelector('.logos');
  const logosSlide = document.querySelector('.logos-slide');

  if (logosSection && logosSlide) {
    // Set initial animation state to paused
    logosSlide.style.animationPlayState = 'paused';

    // Throttle function to limit execution rate of animation changes
    let timeout;
    const throttleChangeState = () => {
      if (timeout) return; // Prevent if already a timeout is running
      timeout = setTimeout(() => {
        // Handle animation play state
        logosSlide.style.animationPlayState = logosSection.classList.contains('in-view') ? 'running' : 'paused';
        timeout = null; // Reset the timeout after execution
      }, 50); // Delay the execution for smoother performance
    };

    // IntersectionObserver to pause/resume animation based on visibility
    const observer = new IntersectionObserver(
      (entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            logosSection.classList.add('in-view'); // Add a class when section is in view
          } else {
            logosSection.classList.remove('in-view'); // Remove class when section is out of view
          }
          throttleChangeState(); // Throttle the changes
        });
      },
      { threshold: 0.1 } // Trigger when at least 10% of the section is in view
    );

    // Observe the logos section
    observer.observe(logosSection);
  } else {
    console.error('logosSection or logosSlide not found');
  }
});
