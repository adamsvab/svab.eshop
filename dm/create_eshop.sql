CREATE SCHEMA IF NOT EXISTS eshop
DEFAULT CHARACTER SET utf8
collate = utf8_czech_ci;

USE eshop;

CREATE TABLE IF NOT EXISTS users (
  user_id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
  name VARCHAR(20) NOT NULL,
  surname VARCHAR(30) NOT NULL,
  email VARCHAR(50) NOT NULL UNIQUE,
  password VARCHAR(20) NOT NULL,
  role ENUM('customer', 'admin') DEFAULT 'customer' NOT NULL
  )
ENGINE = InnoDB;




CREATE TABLE IF NOT EXISTS products (
product_id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
name VARCHAR(30) NOT NULL UNIQUE,
immage VARCHAR(20),
description TEXT(200) NOT NULL,
prize DECIMAL(20, 2) NOT NULL
)
ENGINE = InnoDB;


CREATE TABLE orders (
    order_id INT PRIMARY KEY NOT NULL AUTO_INCREMENT ,
    user_id INT NOT NULL,
    total_price DECIMAL(20, 2) NOT NULL,
    state ENUM('new', 'sent') DEFAULT 'new' NOT NULL,
	city VARCHAR(50) NOT NULL,
    street VARCHAR(50) NOT NULL,
    house_number INT NOT NULL,
    postcode INT NOT NULL,
    created_at DATETIME DEFAULT NOW(), 
    FOREIGN KEY (user_id) REFERENCES users(user_id)
)
ENGINE = InnoDB;


CREATE TABLE order_items (
    id INT AUTO_INCREMENT PRIMARY KEY,
    order_id INT NOT NULL,
    product_id INT NOT NULL,
    quantity INT NOT NULL,
    price DECIMAL(20, 2) NOT NULL,
    FOREIGN KEY (order_id) REFERENCES orders(order_id),
    FOREIGN KEY (product_id) REFERENCES products(product_id)
)
ENGINE = InnoDB;















