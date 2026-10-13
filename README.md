# Library Management System

A PHP and MySQL web application for managing a library catalogue, members, and borrowing. Built for local development with XAMPP.

## Features
- Dashboard: book titles, members, active loans, and overdue loans
- Book catalogue: add, search, edit, and delete books
- Member management: register, search, edit, and delete members
- Issue and return workflow that updates availability in a transaction
- Due dates and overdue indicators
- Prepared statements, output escaping, CSRF tokens, and server-side validation
- Responsive Bootstrap interface

## Stack
PHP 8+, MySQL/MariaDB, PDO, HTML, CSS, Bootstrap 5, Apache/XAMPP.

## Setup (Windows)
1. Extract the folder to `C:\xampp\htdocs\library-management-system`.
2. Start Apache and MySQL in XAMPP.
3. Open `http://127.0.0.1/phpmyadmin/`.
4. Use phpMyAdmin's **Import** tab to import `database/schema.sql`, or paste its contents in the SQL tab.
5. 5. Create `config.php` by copying `config.example.php` in the project root. Set `DB_HOST`, `DB_PORT`, `DB_NAME`, `DB_USER`, and `DB_PASS` to match your local MySQL configuration. For the default XAMPP setup in this project, the port is `3307`, the database is `library_management`, the user is `root`, and the password is blank. Change the port if your MySQL server uses a different one. Never use a blank root password on a public server.
6. Open `http://localhost/library-management-system/`.

## First test
1. Add a book.
2. Register a member.
3. Issue the book and confirm available copies decrease.
4. Mark it returned and confirm available copies increase.

Use fictional data in screenshots and public repositories.

## Future improvements
Add authentication and role-based permissions, automated tests, pagination, CSV export, Docker, and CI/CD. This is a learning project, not production-ready software.

## License
MIT.
