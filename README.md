# POS App

POS App adalah aplikasi point of sale berbasis web untuk mengelola kategori, produk, pelanggan, transaksi, dan laporan penjualan harian.

## Fitur

- Autentikasi pengguna
- Pengelolaan kategori produk
- Pengelolaan produk
- Pengelolaan pelanggan
- Pembuatan dan detail transaksi
- Laporan transaksi harian

## Teknologi

- PHP 8.2 atau lebih baru
- Laravel 12
- MySQL
- Blade
- AdminLTE 3
- Vite 7
- Node.js dan npm

## Prasyarat

Pastikan perangkat telah memiliki:

- PHP 8.2 atau lebih baru beserta ekstensi yang dibutuhkan Laravel
- Composer
- MySQL
- Node.js dan npm

## Instalasi

1. Clone repository dan masuk ke direktori project.

   ```bash
   git clone https://github.com/wibisanabama/pos-app.git
   cd pos-app
   ```

2. Instal dependency PHP dan JavaScript.

   ```bash
   composer install
   npm install
   ```

3. Buat file konfigurasi environment.

   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

   Pada Windows PowerShell, gunakan:

   ```powershell
   Copy-Item .env.example .env
   php artisan key:generate
   ```

4. Atur koneksi database pada `.env`.

   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=pos_app
   DB_USERNAME=root
   DB_PASSWORD=
   ```

5. Buat database `pos_app`, lalu jalankan migration dan seeder.

   ```bash
   php artisan migrate --seed
   ```

## Menjalankan Aplikasi

Jalankan server Laravel, queue worker, dan Vite secara bersamaan:

```bash
composer run dev
```

Aplikasi tersedia pada `http://127.0.0.1:8000`.

## Akun Awal

Seeder membuat akun berikut:

```text
Email: admin@pos.com
Password: password
```

Ganti kredensial tersebut sebelum aplikasi digunakan pada lingkungan produksi.

## Build Produksi

```bash
npm run build
```

Sebelum deployment, pastikan konfigurasi produksi menggunakan:

```env
APP_ENV=production
APP_DEBUG=false
```

## Testing

```bash
composer test
```

Catatan: feature test bawaan saat ini mengharapkan halaman utama dapat diakses tanpa autentikasi. Implementasi aplikasi mengarahkan pengguna yang belum login ke halaman login, sehingga test tersebut perlu disesuaikan.

## Batasan Saat Ini

- Satu transaksi hanya menerima satu produk.
- Stok belum diperbarui saat transaksi dibuat.
- Transaksi belum memvalidasi jumlah pembelian terhadap stok.
- Belum tersedia role dan permission pengguna.
- Laporan hanya menampilkan transaksi pada hari berjalan.

## Struktur Utama

```text
app/Http/Controllers  Controller aplikasi
app/Models            Model Eloquent
database/migrations   Skema database
database/seeders      Data awal
resources/views       Template Blade
routes/web.php        Route web
tests                 Automated test
```

## Lisensi

Project ini belum menetapkan lisensi distribusi. Hubungi pemilik repository sebelum menggunakan atau mendistribusikan kode di luar kebutuhan internal.
