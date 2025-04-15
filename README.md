# Laravel 10 Seeder & Factory with Chunking

This repository demonstrates how to use **Laravel 10 Seeders and Factories** efficiently with **chunked inserts** to seed large datasets into a MySQL database.

## 🚀 Features

- Laravel Seeder & Factory Setup
- Chunking logic to seed large datasets fast (e.g., 5000 records)

## 🛠️ Tech Stack

| Tech       | Description         |
|------------|---------------------|
| Framework  | Laravel 10          |
| Database   | MySQL               |
| Frontend   | Blade Templates     |

## 📦 Artisan Commands Used

php artisan make:model Post -mf
php artisan migrate
php artisan make:seeder PostSeeder
php artisan db:seed

