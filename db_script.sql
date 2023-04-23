-- Criação das tabelas
CREATE TABLE products (
  id INT PRIMARY KEY AUTO_INCREMENT,
  product_name VARCHAR(255) NOT NULL,
  product_desc TEXT,
  product_price DECIMAL(10, 2) NOT NULL,
  product_quantity INT NOT NULL
);
CREATE TABLE users (
  id INT PRIMARY KEY AUTO_INCREMENT,
  usr_fullname VARCHAR(255) NOT NULL,
  usr_name VARCHAR(12) NOT NULL,
  usr_email VARCHAR(255) NOT NULL,
  usr_pass VARCHAR(255) NOT NULL,
  usr_term VARCHAR(3) NOT NULL,
  usr_type INT NOT NULL -- 1: gerente (inserido pelo sysadmin), 2: cliente (inserido pelo usuario)
);
CREATE TABLE contacts (
  id INT PRIMARY KEY AUTO_INCREMENT,
  usr_id INT NOT NULL REFERENCES users(id),
  contact_type VARCHAR(50) NOT NULL,
  contact_value VARCHAR(255) NOT NULL
);
CREATE TABLE adresses (
  id INT PRIMARY KEY AUTO_INCREMENT,
  usr_id INT NOT NULL REFERENCES users(id),
  address_cep VARCHAR(9) NOT NULL, -- 00000-000
  address_address VARCHAR(255) NOT NULL,
  address_district VARCHAR(255) NOT NULL,
  address_city VARCHAR(255) NOT NULL,
  address_state VARCHAR(255) NOT NULL,
  address_country VARCHAR(255) NOT NULL
);
CREATE TABLE orders (
  id INT PRIMARY KEY AUTO_INCREMENT,
  usr_id INT NOT NULL REFERENCES users(id),
  order_date DATETIME NOT NULL,
  order_amount DECIMAL(10, 2) NOT NULL
);
CREATE TABLE products_sold (
  order_id INT NOT NULL REFERENCES orders(id),
  product_id INT NOT NULL REFERENCES products(id),
  quantity INT NOT NULL,
  price DECIMAL(10, 2) NOT NULL,
  PRIMARY KEY (order_id, product_id)
);
CREATE TABLE newsletter (
  id INT PRIMARY KEY AUTO_INCREMENT,
  usr_name VARCHAR(12) NOT NULL,
  usr_email VARCHAR(255) NOT NULL
);

-- inserts
insert into users (usr_fullname, usr_name, usr_email, usr_pass, usr_term, usr_type) values ( 
  "Wesley Bertipaglia", "wesleyberti", "wesley@mail.com", "WesAdmin123", "yes", 1
)