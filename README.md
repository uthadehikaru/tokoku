# Aplikasi E-commerce Laravel

Aplikasi e-commerce berbasis Laravel dengan fitur manajemen produk, keranjang belanja, checkout, dan autentikasi pengguna.

## Spesifikasi Teknis

- Framework: Laravel 10.x
- PHP: 8.1+
- Database: MySQL 5.7+
- Frontend: Livewire, Tailwind CSS
- Autentikasi: Laravel Breeze
- Admin Panel: Filament

## Fitur Utama

- Katalog produk dengan pencarian dan filter
- Keranjang belanja
- Proses checkout
- Manajemen pesanan
- Autentikasi pengguna (login, register)
- Panel admin untuk manajemen produk dan pesanan

## Cara Setup

1. Clone repositori:
   ```
   ```

2. Masuk ke direktori proyek:
   ```
   cd tokoku
   ```

3. Install dependensi PHP:
   ```
   composer install
   ```

4. Salin file .env.example menjadi .env:
   ```
   cp .env.example .env
   ```

5. Generate application key:
   ```
   php artisan key:generate
   ```

6. Konfigurasi database di file .env:
   ```
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=nama_database
   DB_USERNAME=username_database
   DB_PASSWORD=password_database
   ```

7. Jalankan migrasi database:
   ```
   php artisan migrate --seed
   ```

8. Jalankan server development:
   ```
   php artisan serve
   ```

9. Buka `http://localhost:8000` di browser Anda.

## User Demo

1. Admin:
   - Email: admin@laravel.test
   - Password: secret

## Lisensi

Proyek ini dilisensikan di bawah [MIT license](https://opensource.org/licenses/MIT).
