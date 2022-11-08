-- drop tables for initialising to avoid reference key error

DROP TABLE IF EXISTS admin;
DROP TABLE IF EXISTS cart;
DROP TABLE IF EXISTS orders;
DROP TABLE IF EXISTS messages;
DROP TABLE IF EXISTS users;
DROP TABLE IF EXISTS products;

CREATE TABLE admin (
  id INT(100) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
  name varchar(20) NOT NULL,
  password varchar(50) NOT NULL
);
INSERT INTO admin (id, name, password) VALUES (
  1, 'admin', '123'
);

CREATE TABLE users (
  id INT(100) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
  name varchar(20) NOT NULL,
  email varchar(50) NOT NULL,
  number varchar(10) NOT NULL,
  password varchar(50) NOT NULL,
  address varchar(500) NOT NULL
);
INSERT INTO users (id, name, email, number, password, address) VALUES (
  1,
  'user1',
  'user1@gmail.com',
  '123',
  '123',
  '123'
);

CREATE TABLE products (
  id INT(100) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
  name varchar(100) NOT NULL,
  category varchar(100) NOT NULL,
  price double(10,2) NOT NULL,
  image varchar (100)
);
INSERT INTO products (id, name, category, price, image) VALUES (
  1,  'Double Cheese Burger', 'mains',  7.50, 'burger-1.png'
);
CREATE TABLE cart (
  id int(100) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
  user_id int(100) UNSIGNED NOT NULL,
  pid int(100) UNSIGNED NOT NULL,
  name varchar(100) NOT NULL,
  price double(10,2) NOT NULL,
  quantity int(10) NOT NULL,
  image varchar(100) NOT NULL,
  FOREIGN KEY (user_id) REFERENCES users(id),
  FOREIGN KEY (pid) REFERENCES products(id)
);

CREATE TABLE orders (
  id int(100) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
  user_id int(100) UNSIGNED NOT NULL,
  name varchar(20) NOT NULL,
  number varchar(10) NOT NULL,
  email varchar(50) NOT NULL,
  method varchar(50) NOT NULL,
  address varchar(500) NOT NULL,
  total_products varchar(1000) NOT NULL,
  total_price double(100,2) NOT NULL,
  placed_on date NOT NULL DEFAULT current_timestamp(),
  payment_status varchar(20) NOT NULL DEFAULT 'pending',
  order_status varchar(50) NOT NULL DEFAULT 'order submitted',
  FOREIGN KEY (user_id) REFERENCES users(id)
);

CREATE TABLE messages (
  id int(100) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
  user_id int(100) UNSIGNED NOT NULL,
  name varchar(100) NOT NULL,
  email varchar(100) NOT NULL,
  number varchar(12) NOT NULL,
  message varchar(500) NOT NULL,
  FOREIGN KEY (user_id) REFERENCES users(id)
);