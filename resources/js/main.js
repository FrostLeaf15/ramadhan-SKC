// console.log(document.getElementById('waktu'));
const now = new Date();
const days = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jum`at', 'Sabtu'];
const day = days[now.getDay()];
const date = now.getDate();
const months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
const month = months[now.getMonth()]; // Months are zero-based
const year = now.getFullYear();

// console.log(`Hari: ${day}, Tanggal: ${date}-${month}-${year}`);

document.getElementById('waktu').innerText = `${day}, ${date}/${month}/${year}`;