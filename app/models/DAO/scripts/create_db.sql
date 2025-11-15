DROP DATABASE IF EXISTS `pt03_omar_ouahoud`;
CREATE DATABASE IF NOT EXISTS `pt03_omar_ouahoud`
    CHARACTER SET utf8mb4
    COLLATE utf8mb4_unicode_ci;

USE `pt03_omar_ouahoud`;

CREATE TABLE fragrances (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    brand VARCHAR(100) NOT NULL,
    image_url TEXT,
    gender ENUM('men', 'women', 'unisex') NOT NULL,
    price DECIMAL(10,2),
    longevity VARCHAR(10),
    sillage VARCHAR(10)
);

CREATE TABLE  users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(100) NOT NULL UNIQUE,
    name VARCHAR(100) NOT NULL,
    surname VARCHAR(100) NOT NULL,
    email VARCHAR(150) NOT NULL UNIQUE,
    password_hash VARCHAR(255) NOT NULL
);