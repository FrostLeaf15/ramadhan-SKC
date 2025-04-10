import "./bootstrap";

import Alpine from "alpinejs";

window.Alpine = Alpine;

Alpine.start();

// Navbar toggle
document.getElementById("menu-toggle").addEventListener("click", function () {
    let menu = document.getElementById("mobile-menu");
    // console.log(document.getElementById('mobile-menu'))
    menu.classList.toggle("hidden");
});

document
    .getElementById("profile-toggle")
    .addEventListener("click", function () {
        let menu = document.getElementById("profile-menu");
        // console.log(document.getElementById("profile-menu"))
        menu.classList.toggle("hidden");
    });

// Main
function getMasehiDate() {
    const now = new Date();
    const days = [
        "Minggu",
        "Senin",
        "Selasa",
        "Rabu",
        "Kamis",
        "Jum`at",
        "Sabtu",
    ];
    const dayName = days[now.getDay()];
    const dateNow = now.getDate();
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
    const monthName = months[now.getMonth()];
    const yearNow = now.getFullYear();

    const masehiDateText = `${dayName}, ${dateNow} ${monthName} ${yearNow}`;
    document.getElementById("masehi-date").innerText = masehiDateText;
}

function getHijriDate() {
    const today = new Date();
    const hijriDay = today.getDate();
    const hijriMonth = today.getMonth() + 1;
    const hijriYear = today.getFullYear();
    const formattedDate = `${hijriDay}-${hijriMonth}-${hijriYear}`;

    fetch(`https://api.aladhan.com/v1/gToH?date=${formattedDate}`)
        .then((response) => response.json())
        .then((data) => {
            const hijriDate = data.data.hijri;

            // Konversi nama bulan ke Bahasa Indonesia
            const bulanHijriyah = {
                Muharram: "Muharram",
                Safar: "Safar",
                "Rabi' al-Awwal": "Rabiul Awal",
                "Rabi' al-Thani": "Rabiul Akhir",
                "Jumada al-Awwal": "Jumadil Awal",
                "Jumada al-Thani": "Jumadil Akhir",
                Rajab: "Rajab",
                "Sha'ban": "Syaban",
                Ramadan: "Ramadan",
                Shawwal: "Syawal",
                "Dhu al-Qi'dah": "Dzulkaidah",
                "Dhu al-Hijjah": "Dzulhijah",
            };

            const namaBulanHijriyah = hijriDate.month
                ? hijriDate.month.en
                : "Bulan tidak ditemukan";
            const hijriDateText = `${hijriDate.day} ${namaBulanHijriyah} ${hijriDate.year} H`;

            document.getElementById("hijri-date").innerText = hijriDateText;
        })
        .catch((error) => {
            document.getElementById("hijri-date").innerText =
                "Gagal memuat tanggal";
            console.error("Error:", error);
        });
}

// Jalankan kedua fungsi
getMasehiDate();
getHijriDate();

document.getElementById("tipe_isi").addEventListener("change", function () {
    let tipe = this.value;
    document.getElementById("input-teks").style.display =
        tipe === "teks" ? "block" : "none";
    document.getElementById("input-gambar").style.display =
        tipe === "gambar" ? "block" : "none";
    document.getElementById("input-dokumen").style.display =
        tipe === "dokumen" ? "block" : "none";
});
