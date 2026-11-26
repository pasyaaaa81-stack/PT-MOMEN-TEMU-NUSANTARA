# PT MOMEN TEMU NUSANTARA — Website UMKM (Laravel 12)

Paket ini berisi file aplikasi yang ditempelkan ke project Laravel baru. `vendor/` dan framework Laravel tidak disertakan; instal Laravel terlebih dahulu.

## 1. Buat project
```bash
composer create-project laravel/laravel mtn-umkm "^12.0"
cd mtn-umkm
```
Salin seluruh isi folder paket ini ke root project Laravel (timpa `routes/web.php` dan `database/seeders/DatabaseSeeder.php` bila diminta).

## 2. Atur database
Buat database MySQL bernama `mtn_umkm`, lalu sesuaikan `.env`:
```env
APP_NAME="MTN UMKM"
APP_URL=http://127.0.0.1:8000
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=mtn_umkm
DB_USERNAME=root
DB_PASSWORD=

ADMIN_EMAIL=admin@mtnumkm.test
ADMIN_PASSWORD=admin12345
```

## 3. Jalankan
```bash
php artisan key:generate
php artisan migrate --seed
php artisan storage:link
php artisan serve
```
Buka `http://127.0.0.1:8000`.

## 4. Admin
Buka `/admin/login`.
- Email: `admin@mtnumkm.test`
- Password: `admin12345`

Ganti kredensial demo di `.env` sebelum dipublikasikan. Panel admin pada paket tugas ini menggunakan session login sederhana; untuk aplikasi produksi, gunakan sistem autentikasi resmi Laravel.

## 5. File bukti UTS
Ambil screenshot:
1. Halaman publik `/`
2. Daftar produk `/produk` dan detail produk
3. Dashboard dan halaman CRUD admin
4. Isi `routes/web.php`
5. File `database/seeders/DatabaseSeeder.php` dan seeder produk/kategori
6. Database (tabel `categories` dan `products` beserta relasinya)

## Struktur database
- `categories` memiliki banyak `products`
- `products` dimiliki satu `category`

## Catatan
Paket ini adalah source code untuk project Laravel 12, bukan instalasi Laravel lengkap. Bootstrap dimuat melalui CDN sehingga tidak membutuhkan proses build frontend.
