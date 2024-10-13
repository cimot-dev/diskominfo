<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p> <p align="center"> <a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a> <a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a> <a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a> <a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a> </p>

## Tentang Proyek
Ini adalah sistem portal berita sebuah instansi yang berada diJawa Tengah yg dibuat objek belajar membuat sistem bagi mahasiswa magang.

## Fitur Project
- Informasi berita
- Input Data Pegawai
- Input Data Rencana Kerja
- Informasi Perangkat Daerah

## Persyaratan
- PHP: 8.3.9
- Composer: 2.4.1

## Instalasi
- git clone https://github.com/cimot-dev/diskominfo.git
- ```cd diskominfo```

## Install Dependencies
- ```composer install```
- ```npm install```

## Salin file ```.env.example```
- ```cp .env.example .env```

## Generate application key:
- ```php artisan key:generate```

## Update file .env sesuai dengan konfigurasi database:
```DB_CONNECTION=mysql
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=
DB_DATABASE=nama_db
DB_USERNAME=
DB_PASSWORD=yourpassword
```
## Jalankan migrasi database:
```php artisan migrate```

## Jalankan server:
```php artisan serve```

## Menjalankan Dashboard Login
```npm run dev```

## Lisensi
The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

## 💖 Terima Kasih Banyak!

Jika proyek ini membantu, jangan lupa untuk memberi ⭐ di repo ini! 😊
