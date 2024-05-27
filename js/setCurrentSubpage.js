document.addEventListener("DOMContentLoaded", function () {
    const navLinks = document.querySelectorAll('.navbar-nav a');
    const currentLocation = location.pathname;

    for (const link of navLinks) {

        const linkPath = link.getAttribute('href');

        if (currentLocation.endsWith(linkPath)) {
            // Dla przypadku kiedy nazwa pliku jest obecna w URL
            link.classList.add('active');
            break;
        }
        else if (!currentLocation.endsWith('.php')) {
            link.classList.add('active');
            break;
        }
    }
});
