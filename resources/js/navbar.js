document.addEventListener("DOMContentLoaded", function () {
    const menuButton = document.querySelector("button[aria-label='Toggle menu']");
    const navMenu = document.querySelector("nav[aria-label='Global']");

    if (menuButton && navMenu) {
        menuButton.addEventListener("click", function () {
            navMenu.classList.toggle("hidden"); // Toggle class 'hidden' untuk menampilkan/menyembunyikan menu
        });
    }
});
