# Readme

# User

# Head Manager

username adi

password 12345

# Branch Manager

username budi

password 12345

# Admin

username farel 

password 12345

username oki

password 12345

# Database version

10.4.14-MariaDB

# PHP version

PHP 7.4.11

# Framework

Laravel

## Panduan Aplikasi

1. Cloningkan app ini dari Github.
    - Github:
        - 'git clone [https://github.com/hanafi2274/vehicle_rent.git'.](https://github.com/hanafi2274/vehicle_rent.git)
        - Kemudian menggunakan command line di dalam folder app. Ketikkan composer install.
2. edit .env sesuai dengan configure database Anda. Dan membuat database dengan nama renting_vehicle.sql, kemudian php artisan migrate.
3. Import Sql ke database Anda. File sql yang ada pada folder utama dengan nama renting_vehicle.sql
4. Jalankan perintah "php artisan serve"

## Aplikasi

Aplikasi pemesanan kendaraan yang dikelola oleh admin dimana setiap pemesnan akan di approve oleh head manager dan branch manager
