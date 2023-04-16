-- Criação das tabelas
CREATE TABLE products (
  id INT PRIMARY KEY AUTO_INCREMENT,
  name VARCHAR(255) NOT NULL,
  description TEXT,
  price DECIMAL(10, 2) NOT NULL,
  quantity INT NOT NULL
);
CREATE TABLE persons (
  id INT PRIMARY KEY AUTO_INCREMENT,
  name VARCHAR(255) NOT NULL,
  email VARCHAR(255) NOT NULL,
  password VARCHAR(255) NOT NULL,
  person_type INT NOT NULL -- 1: gerente, 2: cliente
);
CREATE TABLE orders (
  id INT PRIMARY KEY AUTO_INCREMENT,
  client_id INT NOT NULL,
  order_date DATETIME NOT NULL,
  order_amount DECIMAL(10, 2) NOT NULL,
  FOREIGN KEY (client_id) REFERENCES persons(id)
);
CREATE TABLE products_sold (
  order_id INT NOT NULL,
  product_id INT NOT NULL,
  quantity INT NOT NULL,
  price DECIMAL(10, 2) NOT NULL,
  PRIMARY KEY (order_id, product_id),
  FOREIGN KEY (order_id) REFERENCES orders(id),
  FOREIGN KEY (product_id) REFERENCES products(id)
);

-- inserts
INSERT INTO produtos (name, description, price, quantity) VALUES
    ('Café Expresso', 'Café expresso de 50ml', 3.99, 100),
    ('Café Latte', 'Café com leite de 200ml', 5.99, 75),
    ('Café Cappuccino', 'Café com espuma de leite de 200ml', 6.99, 50),
    ('Café Mocha', 'Café com leite e chocolate de 250ml', 7.99, 40),
    ('Café Macchiato', 'Café expresso com um pouco de leite de 50ml', 4.99, 80),
    ('Café Americano', 'Café filtrado de 250ml', 4.99, 100),
    ('Café com Leite', 'Café com leite de 250ml', 6.99, 60),
    ('Café com Canela', 'Café com canela de 250ml', 7.99, 30),
    ('Café com Baunilha', 'Café com baunilha de 250ml', 7.99, 30),
    ('Café com Caramelo', 'Café com caramelo de 250ml', 7.99, 30);

INSERT INTO persons (person_type, name, email, password) VALUES
   (2, 'Maria Silva', 'maria@mail.com', '12345'),
   (2, 'João Santos', 'joao@mail.com', '54321'),
   (2, 'Pedro Oliveira', 'pedro@mail.com', 'abc123'),
   (2, 'Ana Souza', 'ana@mail.com', 'xyz789'),
   (2, 'Lucas Pereira', 'lucas@mail.com', '456def'),
   (2, 'Julia Almeida', 'julia@mail.com', 'ghj890'),
   (2, 'Eduardo Costa', 'eduardo@mail.com', 'jkl123'),
   (2, 'Amanda Carvalho', 'amanda@mail.com', 'mno456'),
   (2, 'Diego Rodrigues', 'diego@mail.com', 'pqr789'),
   (2, 'Camila Fernandes', 'camila@mail.com', 'stu123');   
   
INSERT INTO orders (order_date, cliente_id, order_amount) VALUES 
   ('2023-04-10', 1, 28.50),
   ('2023-04-09', 2, 35.00),
   ('2023-04-08', 3, 32.00),
   ('2023-04-07', 4, 30.00),
   ('2023-04-06', 5, 20.00),
   ('2023-04-05', 6, 20.00),
   ('2023-04-04', 7, 53.00),
   ('2023-04-03', 8, 36.00),
   ('2023-04-02', 9, 10.00),
   ('2023-04-01', 10, 75.00);

INSERT INTO products_sold (order_id, product_id, quantity, price) VALUES 
   (1, 1, 2, 10.00),
   (1, 2, 1, 8.50),
   (2, 3, 3, 20.00),
   (2, 4, 2, 15.00),
   (3, 5, 1, 12.00),
   (3, 6, 1, 8.00),
   (4, 7, 3, 25.00),
   (5, 8, 2, 18.00),
   (6, 9, 1, 10.00),
   (7, 10, 4, 35.00),
   (8, 1, 3, 15.00),
   (9, 2, 2, 12.00),
   (10, 3, 1, 10.00),
   (10, 4, 2, 20.00);