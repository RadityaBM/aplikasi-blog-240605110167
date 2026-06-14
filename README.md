# Ruang Baca - Raditya Bintang Maulana

## Identitas
- **Nama Lengkap:** Raditya Bintang Maulana
- **NIM:** 240605110167

## Deskripsi Aplikasi
Ruang Baca adalah aplikasi blog berbasis web yang dibangun menggunakan framework Laravel. Aplikasi ini terdiri dari dua sisi yaitu halaman publik untuk pembaca dan halaman admin (CMS) untuk pengelola konten. Pembaca dapat menjelajahi artikel terbaru, memfilter artikel berdasarkan kategori, dan membaca detail artikel. Admin dapat login dan mengelola artikel, kategori artikel, serta data penulis.

## Fitur Utama
- Halaman publik untuk membaca artikel terbaru
- Filter artikel berdasarkan kategori
- Breadcrumb navigasi di setiap halaman
- Sistem login admin menggunakan email dan password
- Kelola artikel (tambah, edit, hapus, upload gambar)
- Kelola kategori artikel
- Kelola data penulis (tambah, edit, hapus, foto profil)

## Teknologi yang Digunakan
- PHP 8.2
- Laravel 12
- MySQL
- Bootstrap 5

## Langkah Menjalankan Aplikasi Secara Lokal

1. Clone repository ini
```bash
   git clone https://github.com/RadityaBM/aplikasi-blog-240605110167.git
```

2. Masuk ke folder project
```bash
   cd aplikasi-blog-240605110167
```

3. Install dependencies
```bash
   composer install
```

4. Salin file .env
```bash
   cp .env.example .env
```

5. Generate application key
```bash
   php artisan key:generate
```

6. Sesuaikan konfigurasi database di file `.env`

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=db_blog
DB_USERNAME=root
DB_PASSWORD=

7. Jalankan migrasi database
```bash
   php artisan migrate
```

8. Buat symlink storage
```bash
   php artisan storage:link
```

9. Jalankan aplikasi
```bash
   php artisan serve
```

10. Buka browser dan akses `http://localhost:8000`

## Demonstrasi Video
https://youtu.be/6F5pJLt_33s