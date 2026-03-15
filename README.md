<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Project

This project is a simple Laravel 12 CRUD Application built using the MVC architecture. It allows users to perform the main CRUD operations:

Create new data

Read and display data

Update existing data

Delete data

## Project Setup

Follow these steps to clone and run the project on your local machine.

### 1. Clone Project

Clone this repository from GitHub.

```bash
git clone https://github.com/sembunly/Laravel12-E1MVC-CRUD.git
```

Move into the project folder.

```bash
cd Laravel12-E1MVC-CRUD
```

---

### 2. Install Dependencies

Install PHP dependencies using Composer.

```bash
composer install
```

---

### 3. Setup Environment

Copy the environment file.

```bash
cp .env.example .env
```

Generate application key.

```bash
php artisan key:generate
```

---

### 4. Configure Database

Open `.env` and configure your database connection.

```env
DB_DATABASE=your_database_name
DB_USERNAME=root
DB_PASSWORD=
```

---

### 5. Run Migration

Create database tables.

```bash
php artisan migrate
```

---

### 6. Run the Application

Start the Laravel development server.

```bash
php artisan serve
```

Then open in your browser:

```
http://127.0.0.1:8000
```
