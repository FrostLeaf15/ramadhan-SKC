document.addEventListener("DOMContentLoaded", function () {
    const toggleButton = document.querySelector("button[aria-label='Toggle menu']");
    const navMenu = document.querySelector("nav[aria-label='Global']");

    if (toggleButton && navMenu) {
        toggleButton.addEventListener("click", function () {
            navMenu.classList.toggle("hidden");
        });
    }
});
