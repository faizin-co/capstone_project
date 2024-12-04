Lansia Sehat
"Lansia Sehat" adalah sebuah aplikasi berbasis web yang dirancang sebagai bagian dari tugas mata kuliah Capstone Project. Aplikasi ini bertujuan untuk membantu memantau kondisi kesehatan lansia dengan menyediakan fitur-fitur utama seperti input data lansia, screening kesehatan, dan manajemen data posyandu. 

Proyek ini dikembangkan menggunakan framework Laravel untuk memastikan pengelolaan data yang efisien, aman, dan terstruktur. Dengan antarmuka yang intuitif, aplikasi ini mempermudah pengelolaan informasi bagi pengguna, seperti petugas posyandu dan keluarga lansia.

---

 Fitur Utama
1. Input Data Lansia  
   - Memungkinkan pengguna memasukkan profil lansia beserta riwayat kesehatan.
2. Screening Kesehatan  
   - Fitur untuk mencatat hasil screening kesehatan secara rutin.
3. Manajemen Data Staff  
   - Mengelola informasi petugas yang berperan dalam proses pemantauan kesehatan.
4. Halaman Utama  
   - Menampilkan informasi tentang layanan, galeri, jadwal posyandu, dan kontak untuk komunikasi lebih lanjut.

---

 Persyaratan Sistem
- PHP: Versi 8.1 atau lebih baru
- Composer: Terinstal di sistem
- Database: MySQL
- Web Server: Apache/Nginx
- Node.js: Untuk pengelolaan dependensi frontend (opsional)

---

 Langkah Instalasi
Ikuti langkah-langkah berikut untuk menginstal dan menjalankan proyek ini di localhost:

1. Clone Repository  
   Clone repository ke direktori lokal menggunakan perintah berikut:
   ```bash
   git clone https://github.com/faizin-co/capstone_project.git
   cd capstone_project
   ```

2. Instal Dependensi Backend  
   Jalankan perintah berikut untuk menginstal semua dependensi PHP menggunakan Composer:
   ```bash
   composer install
   ```

3. Konfigurasi Environment  
   Salin file `.env.example` menjadi `.env`:
   ```bash
   cp .env.example .env
   ```
   Lalu, sesuaikan konfigurasi database di file `.env`:
   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=nama_database
   DB_USERNAME=root
   DB_PASSWORD=password
   ```

4. Generate Key Aplikasi  
   Jalankan perintah untuk membuat aplikasi key:
   ```bash
   php artisan key:generate
   ```

5. Migrasi dan Seed Database  
   Buat tabel dan isi data awal:
   ```bash
   php artisan migrate --seed
   ```

6. Jalankan Server Lokal  
   Mulai server Laravel:
   ```bash
   php artisan serve
   ```
   Akses aplikasi di browser melalui: [http://127.0.0.1:8000](http://127.0.0.1:8000)

---

 Teknologi yang Digunakan
- Laravel Framework: Backend PHP Framework
- Bootstrap: Untuk desain frontend
- MySQL: Database management
- Composer: Dependency management
- Git: Versi kontrol proyek

---

 Tentang Aplikasi
Aplikasi "Lansia Sehat" dirancang untuk menjadi solusi digital dalam mendukung pemantauan kesehatan lansia. Dengan fitur yang berfokus pada pengguna akhir, aplikasi ini dapat digunakan oleh:
- Petugas Posyandu untuk mencatat dan memonitor data lansia.
- Keluarga Lansia untuk mendapatkan informasi terbaru tentang kondisi kesehatan anggota keluarga mereka.
