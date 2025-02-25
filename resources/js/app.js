

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

document.addEventListener("DOMContentLoaded", () => {
  const slide = document.querySelector(".logos-slide");
  const logos = Array.from(slide.children);
  const visibleCount = 3; // Number of logos visible at a time
  let currentIndex = 0;
  let isAnimating = false;

  // Function to update the slide position
  const updateSlidePosition = () => {
    const logoWidth = logos[0].offsetWidth + 20; // Logo width + gap
    const offset = currentIndex * logoWidth;

    slide.style.transform = `translateX(-${offset}px)`;
  };

  // Function to start the animation
  const startAnimation = () => {
    if (isAnimating) return; // Prevent multiple animations
    isAnimating = true;

    const animate = () => {
      currentIndex++;
      if (currentIndex > logos.length - visibleCount) {
        currentIndex = 0; // Reset to the first set of logos
      }
      updateSlidePosition();
      setTimeout(() => requestAnimationFrame(animate), 3000); // Adjust delay as needed
    };

    requestAnimationFrame(animate);
  };

  // Intersection Observer to start animation only when the section is visible
  const observer = new IntersectionObserver(
    ([entry]) => {
      if (entry.isIntersecting) {
        startAnimation();
      }
    },
    { threshold: 0.1 } // Trigger when 10% of the section is visible
  );

  const clientSection = document.querySelector(".logos");
  observer.observe(clientSection);
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

