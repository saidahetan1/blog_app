---

# My Laravel Project: blog_app

## Description

This project is a web application developed using Laravel. It allows users to manage blog posts, sign up, log in, and search for publications. The application includes features for authentication, user management, and blog post management.

## Features

- **User Management:** Sign up, log in, log out, and user profile management.
- **Blog Management:** Create, view, update, and delete blog posts.
- **Search:** Search functionality to find blog posts based on keywords.
- **Email Verification:** Send and verify emails for user account activation.

## Prerequisites

- PHP 8.0 or higher
- Composer
- MySQL or another database compatible with Laravel

## Installation

### Clone the Repository

Clone the Git repository:

```bash
git clone https://github.com/saidahetan1/blog_app.git
```

### Install Dependencies

Navigate to the project directory and install PHP dependencies:

```bash
composer install
```

### Configure the Environment

Copy the `.env.example` file to `.env` and configure your environment settings:

```bash
cp .env.example .env
```

Generate a new Laravel application key:

```bash
php artisan key:generate
```

Set up your database in the `.env` file:

```dotenv
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

### Migrate the Database

Run migrations to create the necessary tables in the database:

```bash
php artisan migrate
```

### Start the Server

Start the Laravel server:

```bash
php artisan serve
```

Access the application at `http://localhost:8000`.

## Usage

- **Homepage:** Displays the list of blog posts.
- **Create Post:** Use the form to create a new post.
- **Search:** Use the search bar to find posts by title or content.
- **User Management:** Sign up, log in, and manage user profiles.

## Testing

### Run Tests

Execute PHPUnit tests to ensure the application functions correctly:

```bash
php artisan test
```

### Unit Tests

Unit tests for the `AuthController` and `PostController` are located in `tests/Feature`.

---

Adapt this template according to the specifics of your Laravel project.

# Setup steps
1. Run `composer install`
2. Run `npm install`
3. Create `.env` file using the `.env.example`
4. Run `php artisan key:generate`
5. Serve your app with `php artisan serve` and `npm run dev`

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>

# blog_app
