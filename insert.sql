#SQL file to create table and insert data.

CREATE TABLE customer(
customer_id INT NOT NULL AUTO_INCREMENT,
customer_age INT NOT NULL,
);

INSERT INTO customer 
(customer_id, customer_age)
VALUES
(1, 60); 
