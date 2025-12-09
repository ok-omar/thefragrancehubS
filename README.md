# The Fragrance Hub

A full-stack PHP web application for managing and browsing luxury fragrances with user authentication, CRUD operations, and data visualization.

## 🎯 Project Overview

The Fragrance Hub is a comprehensive fragrance catalog system that allows users to browse, manage, and analyze data from luxury brands including Chanel, Dior, Creed, Tom Ford, and more. The application features secure user authentication, full CRUD functionality, pagination, and interactive charts.

## ✨ Key Features

- **User Authentication System**
  - Secure login/registration with password hashing
  - Session management with database-backed session IDs
  - Session expiration handling

- **Fragrance Management (CRUD)**
  - Create, Read, Update, and Delete fragrance entries
  - Bulk import from JSON files (14 luxury brands included)
  - Detailed fragrance attributes (name, brand, price, longevity, sillage, gender)
  - Image management with URLs

## 🗂️ Project Structure

```
├── index.php                    # Entry point / Router
├── index.view.php               # Homepage
├── app/
│   ├── controllers/
│   │   ├── auth.php            # User authentication & registration
│   │   ├── fragrance.php       # Fragrance CRUD operations
│   │   ├── charts.php          # Data visualization controller
│   │   ├── common.php          # Shared utilities (session validation)
│   │   ├── logout.php          # Logout handler
│   │   ├── resetpassword.php   # Password reset logic
│   │   └── expired.php         # Session expiration handler
│   ├── models/
│   │   ├── connection.php      # PDO database connection
│   │   ├── DAO/
│   │   │   ├── fragrance/      # Fragrance CRUD operations
│   │   │   ├── user/           # User CRUD operations
│   │   │   └── scripts/
│   │   │       └── create_db.sql  # Database schema
│   │   └── data/               # JSON files (14 brands)
│   └── views/                  # All view templates
└── public/
    ├── images/                 # Image assets
    └── styles/                 # CSS stylesheets
```

## 🚀 Getting Started

### Prerequisites

- **XAMPP** (Apache + MySQL + PHP)
- PHP 7.4 or higher
- MySQL 5.7 or higher

### Installation

1. **Clone the repository**
   ```bash
   git clone https://github.com/ok-omar/thefragrancehubS.git
   cd Pt4
   ```

2. **Set up the database**
   - Start XAMPP and ensure MySQL is running
   - Import the SQL schema:
   ```bash
   mysql -u root < app/models/DAO/scripts/create_db.sql
   ```
   This creates:
   - Database: `fragrancedb`
   - Tables: `fragrances` and `users`

3. **Configure database connection**
   - Edit `app/models/connection.php` if needed
   - Default settings:
     - Host: `localhost`
     - Database: `fragrancedb`
     - User: `root`
     - Password: *(empty)*

4. **Import fragrance data**
   - Navigate to `http://localhost/BACKEND/Pt4/index.php`
   - Click **"Fill Database"** to import all JSON files
   - Data from 14 luxury brands will be imported automatically

5. **Create a user account**
   - Go to the registration page
   - Create your account with username, email, and password
   - Login to view the fragrances with detailed information

## 📊 Database Schema

### `fragrances` Table
| Column      | Type              | Description                    |
|-------------|-------------------|--------------------------------|
| id          | INT (PK)          | Auto-increment primary key     |
| name        | VARCHAR(255)      | Fragrance name                 |
| brand       | VARCHAR(100)      | Brand name                     |
| image_url   | TEXT              | Product image URL              |
| gender      | ENUM              | men / women / unisex           |
| price       | DECIMAL(10,2)     | Price in currency              |
| longevity   | VARCHAR(10)       | Fragrance longevity rating     |
| sillage     | VARCHAR(10)       | Fragrance projection rating    |

### `users` Table
| Column        | Type              | Description                    |
|---------------|-------------------|--------------------------------|
| id            | INT (PK)          | Auto-increment primary key     |
| username      | VARCHAR(100)      | Unique username                |
| email         | VARCHAR(255)      | Unique email address           |
| password_hash | VARCHAR(255)      | Hashed password         |
| session       | VARCHAR(255)      | Current session ID             |

## 🎨 Features In Detail

### Authentication Flow
- Passwords are hashed using `password_hash()` with bcrypt
- Session IDs are regenerated on accessing the page, and set to your user when you login
- Session validation occurs on protected pages
- Expired sessions redirect to a dedicated session expiration page

### Pagination System
- Customizable rows per page (8, 16, 24)
- Preferences stored in cookies for 30 days
- Dynamic page calculation based on total records
- Navigation controls for first, previous, next, and last pages

### CRUD Operations
- **Create**: Add new fragrances 
- **Read**: Browse fragrances with pagination
- **Update**: Edit existing fragrance details
- **Delete**: Remove fragrances from database

### Data Import
- Bulk import from JSON files in `app/models/data/`
- 14 luxury brands pre-loaded
- Randomized import order
- Error handling with feedback

## 🔐 Security Features

- SQL injection protection via PDO prepared statements
- Password hashing with bcrypt algorithm
- Session ID setup on authentication
- Database-backed session validation
- Cookie-based preferences with secure flags

**Current Page Management**
   - Page number is passed via URL parameter `?page-number=X`
   - Current page is validated to stay within valid range (1 to max pages)
   - The fragrance range is displayed by calculating the start: `$start = ($current_page - 1) * $rows_per_page` then showing the next amount: `fragrance_per_page`

**Data Retrieval**
   - `getFragranceInRange()` fetches only the fragrances for the current page
   - Uses `LIMIT` and `OFFSET` in SQL query for efficient pagination

**Navigation Controls** (in `charts.view.php`)
   - **<<** First page
   - **<** Previous page (disabled on page 1)
   - Page counter: "X / Y"
   - **>** Next page (disabled on last page)
   - **>>** Last page

### Example URLs
- First page with 8 items: `charts.php?page-number=1&rows-per-page=8`
- Second page with 16 items: `charts.php?page-number=2&rows-per-page=16`
- Navigate to page 20: `charts .php?page-number=20`

## Features

- **Database Operations**: Import/clear fragrance data
- **Pagination**: Customizable items per page (3, 5, or 10)
- **Persistent Settings**: Cookie-based preference storage
- **Responsive Navigation**: First, previous, next, and last page controls
- **Brand Support**: 14 luxury fragrance brands
- **Modern UI Design**: Gradient backgrounds, smooth animations, and clean styling

## 🔧 Technology Stack

- **Backend**: PHP 7.4+ with PDO
- **Database**: MySQL with utf8mb4 encoding
- **Frontend**: HTML5, CSS3, JavaScript
- **Architecture**: MVC pattern
- **Security**: Password hashing, session management, prepared statements

