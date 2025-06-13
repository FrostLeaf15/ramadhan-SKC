# Ramadhan SMK Kesehatan Cianjur 🕌

[![Bahasa Utama](https://img.shields.io/badge/language-Blade-blue?style=flat-square&logo=laravel&logoColor=white)](https://www.php.net/)[![PHP](https://img.shields.io/badge/PHP-8.2+-777BB4?style=flat-square&logo=php&logoColor=white&style=for-the-badge&color=777BB4&logoColor=white "PHP")](https://www.php.net/)[![Laravel](https://img.shields.io/badge/Laravel-11-FF2D20?style=flat-square&logo=laravel&logoColor=white&style=for-the-badge&color=FF2D20&logoColor=white "Laravel")](https://laravel.com/)[![JavaScript](https://img.shields.io/badge/JavaScript-F7DF1E?style=flat-square&logo=javascript&logoColor=black&style=for-the-badge&color=F7DF1E&logoColor=black "JavaScript")](https://www.javascript.com/)[![Tailwind CSS](https://img.shields.io/badge/Tailwind_CSS-3.4.1-38B2AC?style=flat-square&logo=tailwindcss&logoColor=white&style=for-the-badge&color=38B2AC&logoColor=white "Tailwind CSS")](https://tailwindcss.com/)[![Docker](https://img.shields.io/badge/Docker-2496ED?style=flat-square&logo=docker&logoColor=white&style=for-the-badge&color=2496ED&logoColor=white "Docker")](https://www.docker.com/)[![MySQL](https://img.shields.io/badge/MySQL-4479A1?style=flat-square&logo=mysql&logoColor=white&style=for-the-badge&color=4479A1&logoColor=white "MySQL")]()

Sistem Informasi Ramadhan SMK Kesehatan Cianjur adalah aplikasi web yang dibangun menggunakan Laravel 11, dirancang khusus untuk kebutuhan informasi dan pengelolaan kegiatan selama bulan Ramadhan di lingkungan sekolah. Aplikasi ini bertujuan untuk memudahkan penyampaian informasi terkait jadwal imsakiyah, ceramah agama, dan kegiatan-kegiatan Ramadhan lainnya.

Aplikasi ini juga dilengkapi dengan antarmuka yang responsif dan modern berkat penggunaan Tailwind CSS, sehingga dapat diakses dengan mudah melalui berbagai perangkat. Dibuat dengan fokus pada kemudahan penggunaan dan efisiensi, aplikasi ini diharapkan dapat memberikan manfaat yang besar bagi seluruh komunitas SMK Kesehatan Cianjur selama bulan Ramadhan.

### **Fitur Utama ✨**

*   🎤 **Manajemen Ceramah Agama:** Memungkinkan pengelolaan dan publikasi jadwal ceramah agama yang diselenggarakan di sekolah.
*   📢 **Pengumuman Kegiatan Ramadhan:** Memfasilitasi penyampaian informasi terkait kegiatan-kegiatan Ramadhan yang diadakan oleh sekolah.
*   🔒 **Autentikasi Pengguna:** Sistem autentikasi yang aman untuk membatasi akses ke fitur-fitur tertentu hanya untuk pengguna yang berwenang.

### **Tech Stack 🛠️**

*   **Bahasa Pemrograman:** PHP
*   **Framework:** Laravel 11
*   **Frontend:** Blade, JavaScript, Tailwind CSS
*   **Database:** MySQL
*   **Containerization:** Docker (opsional)

### **Instalasi & Menjalankan 🚀**

1.  Clone repositori:
    ```bash
    git clone https://github.com/FrostLeaf15/ramadhan-SKC
    ```
2.  Masuk ke direktori:
    ```bash
    cd ramadhan-SKC
    ```
3.  Install dependensi:
    ```bash
    composer install
    npm install # Jika ada aset frontend yang perlu dikompilasi
    ```
4.  Konfigurasi environment:
    *   Salin file `.env.example` ke `.env`
    *   Sesuaikan konfigurasi database (DB_DATABASE, DB_USERNAME, DB_PASSWORD) di file `.env`
    ```bash
    cp .env.example .env
    ```
5.  Generate key aplikasi:
    ```bash
    php artisan key:generate
    ```
6.  Migrasi database:
    ```bash
    php artisan migrate
    ```
7.  Seed database (jika diperlukan):
     ```bash
     php artisan db:seed
     ```

8.  Jalankan proyek:
    ```bash
    php artisan serve
    npm run dev # Jika ada aset frontend yang perlu dikompilasi
    ```

    Aplikasi akan berjalan di `http://localhost:8000` (atau port lain yang ditentukan oleh `php artisan serve`).

### **Cara Berkontribusi 🤝**

1.  Fork repositori ini.
2.  Buat branch untuk fitur atau perbaikan Anda: `git checkout -b feature/nama-fitur`
3.  Lakukan commit dengan pesan yang jelas: `git commit -m "Menambahkan fitur baru"`
4.  Push ke branch Anda: `git push origin feature/nama-fitur`
5.  Buat Pull Request ke branch `main` repositori ini.

### **Lisensi 📄**

Proyek ini tidak memiliki lisensi yang ditentukan. Semua hak dilindungi undang-undang.


---
README.md ini dihasilkan secara otomatis oleh [README.MD Generator](https://github.com/emRival) — dibuat dengan ❤️ oleh [emRival](https://github.com/emRival)
