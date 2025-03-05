document.getElementById('menu-toggle').addEventListener('click', function () {
    let menu = document.getElementById('mobile-menu');
    // console.log(document.getElementById('mobile-menu'))
    menu.classList.toggle('hidden');
});

document.getElementById('profile-toggle').addEventListener('click', function () {
    let menu = document.getElementById('profile-menu');
    // console.log(document.getElementById("profile-menu"))
    menu.classList.toggle('hidden');
});