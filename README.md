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


## Concept
Fewer Queries = Faster Inserts
Instead of running thousands of small INSERT queries, chunking combines data into fewer, larger queries — drastically reducing database overhead.

Leverages MySQL’s Strengths
MySQL is optimized for handling bulk inserts efficiently. Sending large chunks (e.g., 500 records at a time) allows the database to process data faster with fewer transactions.

Better Performance, Less Load
Chunking reduces repeated parsing, connection handling, and disk writes — improving performance and lowering memory usage during seeding.
