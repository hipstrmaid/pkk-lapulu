const items = document.querySelectorAll('.carousel-item');
const circles = document.querySelectorAll('.circle');
let currentIndex = 0;

function changeSlide() {
    items[currentIndex].classList.remove('active');
    circles[currentIndex].classList.remove('active');

    currentIndex = (currentIndex + 1) % items.length;

    items[currentIndex].classList.add('active');
    circles[currentIndex].classList.add('active');
}

// Change slide every 3 seconds (3000 ms)
setInterval(changeSlide, 6000);
