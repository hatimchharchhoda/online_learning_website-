const slider = document.querySelector('.slider');
const prevBtn = document.querySelector('.prev');
const nextBtn = document.querySelector('.next');
let slideIndex = 0;

nextBtn.addEventListener('click', () => {
    slideIndex++;
    if (slideIndex > 2) {
        slideIndex = 2;
    }
    updateSlider();
});

prevBtn.addEventListener('click', () => {
    slideIndex--;
    if (slideIndex < 0) {
        slideIndex = 0;
    }
    updateSlider();
});

function updateSlider() {
    slider.style.transform = `translateX(-${slideIndex * 100}%)`;
}