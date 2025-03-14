import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();


// Navbar toggle
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


// Main
// console.log(document.getElementById('waktu'));
const now = new Date();
const days = ["Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jum`at", "Sabtu"];
const day = days[now.getDay()];
const date = now.getDate();
const months = [
    "Januari",
    "Februari",
    "Maret",
    "April",
    "Mei",
    "Juni",
    "Juli",
    "Agustus",
    "September",
    "Oktober",
    "November",
    "Desember",
];
const month = months[now.getMonth()]; // Months are zero-based
const year = now.getFullYear();

// console.log(`Hari: ${day}, Tanggal: ${date}-${month}-${year}`);

document.getElementById("waktu").innerText = `${day}, ${date}/${month}/${year}`;

document.getElementById("tipe_isi").addEventListener("change", function () {
    let tipe = this.value;
    document.getElementById("input-teks").style.display =
        tipe === "teks" ? "block" : "none";
    document.getElementById("input-gambar").style.display =
        tipe === "gambar" ? "block" : "none";
    document.getElementById("input-dokumen").style.display =
        tipe === "dokumen" ? "block" : "none";
});
