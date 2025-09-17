-- Construction Site SQL Dump
CREATE DATABASE IF NOT EXISTS construction_db;
USE construction_db;

CREATE TABLE IF NOT EXISTS admin (
  id INT AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(50) NOT NULL,
  password VARCHAR(255) NOT NULL
);

INSERT INTO admin (username, password) VALUES ('admin', MD5('12345'))
ON DUPLICATE KEY UPDATE username=username;

CREATE TABLE IF NOT EXISTS services (
  id INT AUTO_INCREMENT PRIMARY KEY,
  title VARCHAR(120) NOT NULL,
  description TEXT,
  image VARCHAR(255) DEFAULT 'default.jpg'
);

CREATE TABLE IF NOT EXISTS projects (
  id INT AUTO_INCREMENT PRIMARY KEY,
  title VARCHAR(150) NOT NULL,
  description TEXT,
  status VARCHAR(40) DEFAULT 'Ongoing',
  image VARCHAR(255) DEFAULT 'default.jpg'
);

CREATE TABLE IF NOT EXISTS slides (
  id INT AUTO_INCREMENT PRIMARY KEY,
  image VARCHAR(255) NOT NULL,
  caption VARCHAR(255)
);

CREATE TABLE IF NOT EXISTS inquiries (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(120),
  email VARCHAR(120),
  phone VARCHAR(40),
  message TEXT,
  created_at DATETIME
);