function toggleDetails(event) {
    const detailsElements = document.querySelectorAll('details');

    detailsElements.forEach((details) => {
        if (details !== event.currentTarget && details.open) {
            details.removeAttribute('open'); // Close other open details
        }
    });
}

// Toggle mobile menu
document.getElementById('nav-toggle').addEventListener('click', function() {
    const mobileMenu = document.getElementById('mobile-menu');
    mobileMenu.classList.toggle('hidden');
});

function updateClock() {
    const now = new Date();
    const hours = String(now.getHours()).padStart(2, '0');
    const minutes = String(now.getMinutes()).padStart(2, '0');
    const seconds = String(now.getSeconds()).padStart(2, '0');
    const currentTime = `${hours}:${minutes}:${seconds}`;

    document.getElementById('clock').textContent = currentTime;
}

// Update the clock every second
setInterval(updateClock, 1000);

// Initialize clock display
updateClock();
