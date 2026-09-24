# Task Manager

A simple Task Management System built with Laravel.

## Features

- Add Tasks
- Edit Tasks
- Delete Tasks
- Set Task Status
- Set Due Dates
- Responsive UI
- SQLite Database

## Requirements

- PHP 8+
- Composer
- Laravel 12

## Installation

```bash
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan serve