# Fragrance Hub - Project README

## Project Overview
Fragrance Hub is a PHP-based web application for managing and displaying fragrance data. The application supports database operations, pagination, and displays fragrance information from various luxury brands.

## Project Structure

```
index.php                 # Main entry point for database operations
index.vista.php          # View for database import/clear operations
app/
├── controllers/
│   └── homepage.php     # Main controller for fragrance display with pagination
├── models/
│   ├── connection.php   # Database connection configuration
│   ├── DAO/
│   │   ├── delete.php   # Database delete operations
│   │   ├── insert.php   # Database insert operations (insertFragrancesFromJson)
│   │   ├── read.php     # Database read operations (getAllfragrances, getFragranceInRange)
│   │   └── scripts/
│   │       └── create_fragrance_table.sql  # SQL table creation script
│   └── data/            # JSON files with fragrance data
│       ├── armani.json
│       ├── burberry.json
│       ├── calvin.json
│       ├── chanel.json
│       ├── creed.json
│       ├── dior.json
│       ├── dolce.json
│       ├── hermes.json
│       ├── jomalon.json
│       ├── kilian.json
│       ├── lv.json
│       ├── maisonfrancis.json
│       ├── Prada.json
│       └── tomford.json
└── views/
    └── homepage.vista.php  # Main display view with pagination UI
public/
└── styles/
    ├── dropdown.css     # Dropdown component styles
    ├── homepage.css     # Homepage styling
    └── index.css        # Index page styling with modern gradient design
```

## Database Setup

### SQL Script Location
The database table creation script is located at:
**`app/models/DAO/scripts/create_fragrance_table.sql`**

This script creates the `fragrances` table with the following structure:
- `id` (Primary Key)
- `name`
- `brand`
- `image_url`
- `gender`
- `price`
- `longevity`
- `sillage`

### Initial Setup
1. Run the SQL script to create the database table
2. Navigate to `index.php`
3. Click "Fill Database" to import fragrance data from JSON files in `app/models/data/`, you will be redirected automatically to the homepage after the import job is finished
4. Click "Clear Database" to remove all fragrance data from the database
5. Click "Go to Homepage" to view the fragrances, this is for when you enter the index.php again and you already imported all the data, redirects you to homepage.

## User Interface

### Index Page
The main entry page (`index.vista.php`) features a modern, user-friendly design:
- **Purple gradient background** for visual appeal
- **Centered card layout** with shadow effects
- **Three action buttons** with distinct gradient styles:
  - Fill Database (purple gradient)
  - Clear Database (pink gradient)
  - Go to Homepage (cyan gradient)
- **Hover animations** for interactive feedback
- **Responsive design** that adapts to different screen sizes

Styling is managed by `public/styles/index.css`

## How Pagination Works

The pagination system is implemented in `app/controllers/homepage.php`:

### Key Components

1. **Rows Per Page Selection**
   - Users can select 3, 5, or 10 fragrances per page via dropdown in `homepage.vista.php`
   - Selection is stored in a cookie (`rows-per-page`) for 30 days
   - Default: 3 fragrances per page

2. **Page Calculation**
   ```php
   $total_fragrances = count(getAllfragrances($pdo));
   $pages = ceil($total_fragrances / $rows_per_page);
   ```

3. **Current Page Management**
   - Page number is passed via URL parameter `?page-number=X`
   - Current page is validated to stay within valid range (1 to max pages)
   - Start position is calculated: `$start = ($current_page - 1) * $rows_per_page`

4. **Data Retrieval**
   - `getFragranceInRange()` fetches only the fragrances for the current page
   - Uses `LIMIT` and `OFFSET` in SQL query for efficient pagination

5. **Navigation Controls** (in `homepage.vista.php`)
   - **<<** First page
   - **<** Previous page (disabled on page 1)
   - Page counter: "X / Y"
   - **>** Next page (disabled on last page)
   - **>>** Last page

### Example URLs
- First page with 3 items: `homepage.php?page-number=1&rows-per-page=3`
- Second page with 5 items: `homepage.php?page-number=2&rows-per-page=5`
- Navigate to page 3: `homepage.php?page-number=3`

## Data Flow

1. **Import**: `index.php` → `insert.php` → Database
2. **Display**: `homepage.php` → `read.php` → `homepage.vista.php`
3. **Delete**: `index.php` → `delete.php` → Database

## Features

- **Database Operations**: Import/clear fragrance data
- **Pagination**: Customizable items per page (3, 5, or 10)
- **Persistent Settings**: Cookie-based preference storage
- **Responsive Navigation**: First, previous, next, and last page controls
- **Brand Support**: 14 luxury fragrance brands
- **Modern UI Design**: Gradient backgrounds, smooth animations, and clean styling
