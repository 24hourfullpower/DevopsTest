#SQL file to create table and insert data.

CREATE TABLE customer(
customer_name VARCHAR(40) NOT NULL,
customer_age INT NOT NULL,
);

INSERT INTO customer 
(customer_name, customer_age)
VALUES
("Mayank", 60); 
