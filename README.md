# Toko Laptop API

Project ini merupakan API sederhana berbasis Laravel yang digunakan untuk mengelola data laptop. API ini menyediakan fitur CRUD (Create, Read, Update, Delete) untuk satu resource, yaitu laptop, serta dilengkapi dengan dokumentasi otomatis menggunakan scramble.

## Deskripsi

API ini dibuat untuk mengelola data laptop seperti nama, brand, spesifikasi, harga, dan stok.
Resource utama pada API ini adalah **Laptop** dengan field sebagai berikut:
* name
* brand
* processor
* ram_gb
* storage_gb
* price
* stock
* description

## Endpoint API

Base URL:
```
http://127.0.0.1:8000/api
```
Daftar endpoint:
* GET `/laptops`
  Mengambil semua data laptop
* POST `/laptops`
  Menambahkan data laptop baru
* GET `/laptops/{id}`
  Menampilkan detail satu laptop
* PUT/PATCH `/laptops/{id}`
  Mengupdate data laptop
* DELETE `/laptops/{id}`
  Menghapus data laptop

## Dokumentasi API

Dokumentasi API dapat diakses melalui:
```
http://127.0.0.1:8000/docs/api
```
Dokumentasi ini dibuat menggunakan Scramble dan menampilkan seluruh endpoint beserta request dan response-nya.

## Cara Menjalankan Project

1. Clone repository:
```bash
git clone https://github.com/username/toko-laptop-api.git
cd toko-laptop-api
```
2. Install dependency:
```bash
composer install
```
3. Copy file environment:
```bash
cp .env.example .env
```
4. Atur konfigurasi database pada file `.env`:
```env
DB_DATABASE=toko_laptop_api
DB_USERNAME=root
DB_PASSWORD=
```
5. Generate application key:
```bash
php artisan key:generate
```
6. Jalankan migration:
```bash
php artisan migrate
```
7. Jalankan server:
```bash
php artisan serve
```

## Catatan
* Pastikan MySQL sudah berjalan sebelum menjalankan migration
* Dokumentasi API hanya dapat diakses jika server Laravel sedang berjalan

## Author

Alya Hamidah Izzatul Laili
245150707111018
TIS B
