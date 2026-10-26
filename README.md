# 📚 Online Library Management System (PHP & MySQL)

[![PHP Version](https://img.shields.io/badge/PHP-7.4%20%7C%208.x-777BB4?logo=php&logoColor=white)](https://www.php.net/)
[![Database](https://img.shields.io/badge/MySQL-5.7%2B%20%7C%208.x-4479A1?logo=mysql&logoColor=white)](https://www.mysql.com/)
[![License: MIT](https://img.shields.io/badge/License-MIT-yellow.svg)](LICENSE)

An Online Library Management System built with PHP and MySQL/MariaDB. It streamlines library operations, allowing librarians to manage books, authors, categories, student registrations, book issuance, and returns with automated fine calculations, while giving students a portal to browse available books and track their borrowing history.

---

## ✨ Features

### 👤 Student / User Portal
- **User Authentication**: Student registration and secure login.
- **Book Catalog**: Browse listed books with category, author, ISBN, and quantity details.
- **Borrowing History**: Track issued books, return due dates, return statuses, and any applied fines.
- **Profile Management**: Update contact details and change account passwords.
- **Password Recovery**: Self-service password recovery flow.

### 🛡️ Admin Panel
- **Dashboard Overview**: Metrics on total books, issued books, returned books, and registered students.
- **Book Management**: Add, update, view, and delete books along with cover image uploads.
- **Category & Author Management**: Full CRUD operations for organizing library contents.
- **Issue & Return Tracking**: Issue books to registered students and record returns with fine computation.
- **Student Management**: View registered students, view individual borrowing histories, and block/unblock accounts.

---

## 🛠️ Tech Stack & Requirements

- **Backend**: PHP 7.4 or PHP 8.x (with `pdo_mysql` and `mbstring` extensions enabled)
- **Database**: MySQL 5.7+ / MySQL 8.x / MariaDB 10.x
- **Frontend**: HTML5, CSS3, JavaScript (Bootstrap 3, Font Awesome, jQuery, DataTables)
- **Web Server**: Apache or Nginx (e.g. XAMPP, WAMP, LAMP, or Laragon)

---

## 📂 Project Structure

```text
Online-Library-Management-System-PHP/
├── library/
│   ├── admin/                 # Admin panel modules (manage books, authors, issues, etc.)
│   │   ├── bookimg/           # Uploaded book cover images
│   │   ├── includes/          # Admin headers, footers, and configs
│   │   └── ...                # Admin pages
│   ├── assets/                # CSS, fonts, JS, and vendor plugins
│   ├── includes/              # Shared student headers, footers, and config
│   │   ├── config.php         # Active database connection configuration
│   │   └── config.example.php # Example template for database configuration
│   └── *.php                  # Student/Public pages (signup, login, catalog, etc.)
├── sql/
│   └── library.sql            # Clean database schema & starter sample data
├── .gitignore                 # Git ignore rules for clean repository hygiene
├── LICENSE                    # MIT License
└── README.md                  # Project documentation
```

---

## 🚀 Installation & Setup Guide

### 1. Prerequisites
Ensure you have a local web development environment installed, such as [XAMPP](https://www.apachefriends.org/), [WAMP](https://www.wampserver.com/), or [Laragon](https://laragon.org/).

### 2. Clone the Repository
Clone this repository into your web server's document root (e.g. `htdocs` for XAMPP, `www` for WAMP):

```bash
git clone https://github.com/<your-username>/Online-Library-Management-System-PHP.git
```

### 3. Database Configuration
1. Start **Apache** and **MySQL** services from your XAMPP/WAMP control panel.
2. Open your web browser and navigate to **phpMyAdmin** (`http://localhost/phpmyadmin`).
3. Click **New** and create a database named `library`.
4. Select the `library` database, click the **Import** tab, choose `sql/library.sql` from this project, and click **Go** / **Import**.

### 4. Configure Application Settings
Review the database connection settings in:
- `library/includes/config.php`
- `library/admin/includes/config.php`

Default local connection settings:
```php
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'library');
```
*If your MySQL instance has a root password or runs on a non-standard port/socket, update these values accordingly.*

---

## 🔑 Default Login Credentials

### 🛡️ Admin Portal
- **URL**: `http://localhost/Online-Library-Management-System-PHP/library/admin/` (or `http://localhost/library/admin/`)
- **Username**: `admin`
- **Password**: `Test@123`

### 👤 Student / User Portal
- **URL**: `http://localhost/Online-Library-Management-System-PHP/library/` (or `http://localhost/library/`)
- **Email**: `test@gmail.com`
- **Password**: `Test@123`

> [!IMPORTANT]
> **Change Default Passwords**: For security reasons, please log in and change all default passwords upon initial setup.

---

## 🔒 Security Best Practices for Production

If you plan to deploy this project to a live public server:
1. **Password Hashing**: Upgrade database authentication from legacy MD5 hashing to `password_hash()` and `password_verify()` with `PASSWORD_BCRYPT`.
2. **Environment Variables**: Store sensitive database credentials in environment variables (`.env`) rather than committing them in code.
3. **Directory Permissions**: Ensure the `library/admin/bookimg/` folder has restricted execution permissions (disable `.php` execution in upload folders via `.htaccess`).
4. **HTTPS / SSL**: Always enforce HTTPS in production environments to protect user session cookies and transmitted credentials.

---

## 📜 Credits & License

- Base application structure adapted from [PHPGurukul](https://phpgurukul.com/online-library-management-system/).
- Released under the [MIT License](LICENSE).
