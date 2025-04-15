<p align="center">
  <a href="" rel="noopener">
 <img width=200px height=200px src="https://i.imgur.com/6wj0hh6.jpg" alt="Project logo"></a>
</p>

<h3 align="center">Book Review</h3>

<div align="center">

[![Status](https://img.shields.io/badge/status-active-success.svg)]()
[![GitHub Issues](https://img.shields.io/github/issues/yourusername/book-review.svg)](https://github.com/yourusername/book-review/issues)
[![GitHub Pull Requests](https://img.shields.io/github/issues-pr/yourusername/book-review.svg)](https://github.com/yourusername/book-review/pulls)
[![License](https://img.shields.io/badge/license-MIT-blue.svg)](/LICENSE)

</div>

---

<p align="center"> A modern book review application built with Laravel that allows users to discover, review, and share their favorite books.
    <br> 
</p>

## 📝 Table of Contents

- [About](#about)
- [Getting Started](#getting_started)
- [Deployment](#deployment)
- [Usage](#usage)
- [Built Using](#built_using)
- [TODO](../TODO.md)
- [Contributing](../CONTRIBUTING.md)
- [Authors](#authors)
- [Acknowledgments](#acknowledgement)

## 🧐 About <a name = "about"></a>

Book Review is a web application designed for book enthusiasts to share their thoughts on books they've read. Users can browse books, read reviews from other users, and contribute their own reviews and ratings. The application features user authentication, book cataloging, review management, and social features to connect with other readers.

Key features include:
- User registration and authentication
- Book search and discovery
- Review and rating system
- User profiles with reading history
- Responsive design for all devices

## 🏁 Getting Started <a name = "getting_started"></a>

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes.

### Prerequisites

Before you begin, ensure you have met the following requirements:
- PHP 8.1 or higher
- Composer installed
- MariaDB database server
- Node.js and npm installed

### Installing

1. Clone the repository: 
```bash
git clone https://github.com/yourusername/book-review.git
cd book-review
```

2. Install PHP dependencies:
```bash
composer install
```

3. Install JavaScript dependencies:
```bash
npm install
```

4. Create a copy of the .env file and configure your database:
```bash
cp .env.example .env
```

5. Generate application key:
```bash
php artisan key:generate
```

6. Run migrations and seed the database:
```bash
    php artisan migrate --seed
```

7. Compile assets and Start the development server:
```bash
composer run dev`
 ```   

Now you can access the application at `http://localhost:8000`

## 🔧 Running the tests <a name = "tests"></a>

To run the PHPUnit tests:
    php artisan test

### Break down into end to end tests

The application includes feature tests for:
- User authentication flows
- Book CRUD operations
- Review submission and editing
- API endpoints

### And coding style tests

Laravel Pint is configured for code style checking:
```bash
    composer lint
```

## 🎈 Usage <a name="usage"></a>

After installation:
1. Register a new account or use the seeded admin account (admin@example.com / password)
2. Browse books in the catalog
3. Click on a book to view details and reviews
4. Submit your own review and rating
5. Manage your reviews from your profile page

## 🚀 Deployment <a name = "deployment"></a>

For production deployment:
1. Set up a web server (Nginx/Apache) with PHP support
2. Configure the database connection in .env
3. Run:
```bash
    php artisan optimize
    npm run production
```

## ⛏️ Built Using <a name = "built_using"></a>

- [Laravel 12](https://laravel.com/) - PHP Framework
- [MariaDB](https://mariadb.org/) - Database
- [TailwindCSS](https://tailwindcss.com/) - CSS Framework
- [Alpine.js](https://alpinejs.dev/) - JavaScript Framework

## ✍️ Authors <a name = "authors"></a>

- [@ja-phiri](https://github.com/ja-phiri) - Sole developer

## 🎉 Acknowledgements <a name = "acknowledgement"></a>

- Laravel community for the excellent documentation
- TailwindCSS for the utility-first approach
- All open-source contributors whose packages made this project possible