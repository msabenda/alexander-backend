//Partners
const slider = document.querySelector('.slider');
const slides = Array.from(document.querySelectorAll('.slide-item'));
let currentIndex = 0;

// Function to update active slide
function updateSlider() {
    slider.style.transform = `translateX(-${currentIndex * 100}%)`;
    slides.forEach((slide, index) => {
        slide.classList.toggle('active', index === currentIndex);
    });
}

// Event listeners for buttons
document.querySelector('.next-btn').addEventListener('click', () => {
    currentIndex = (currentIndex + 1) % slides.length;
    updateSlider();
});

document.querySelector('.prev-btn').addEventListener('click', () => {
    currentIndex = (currentIndex - 1 + slides.length) % slides.length;
    updateSlider();
});

// Initial setup
updateSlider();