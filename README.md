# Toko Laptop API

REST API untuk mengelola data laptop. Proyek ini dibuat untuk praktikum Teknologi Integrasi Sistem menggunakan Laravel 13 dan SQLite.

## Menjalankan secara lokal

Siapkan PHP 8.3 atau versi yang kompatibel dengan `^8.3`, Composer, dan ekstensi `pdo_sqlite`. Jalankan perintah berikut dari direktori repo.

```bash
composer install
cp .env.example .env
touch database/database.sqlite
php artisan key:generate
php artisan migrate
php artisan serve
```

Secara bawaan, API tersedia di `http://127.0.0.1:8000/api/laptops`.

## Endpoint

| Metode | Endpoint | Fungsi |
| --- | --- | --- |
| `GET` | `/api/laptops` | Melihat daftar laptop |
| `POST` | `/api/laptops` | Menambahkan laptop |
| `GET` | `/api/laptops/{id}` | Melihat detail laptop |
| `PUT` / `PATCH` | `/api/laptops/{id}` | Memperbarui data laptop |
| `DELETE` | `/api/laptops/{id}` | Menghapus laptop |

Contoh permintaan untuk melihat daftar laptop.

```bash
curl -H "Accept: application/json" http://127.0.0.1:8000/api/laptops
```
