-- client table

CREATE TABLE client
(
	id SERIAL NOT NULL PRIMARY KEY,
	firstName VARCHAR(20) NOT NULL,
	secondName VARCHAR(20) NOT NULL,
	gender VARCHAR(6) NOT NULL,
    email VARCHAR(20)
);

-- stylist table
CREATE TABLE stylist (
  id SERIAL NOT NULL PRIMARY KEY,
  firstName VARCHAR(20) NOT NULL,
  secondName VARCHAR(20) NOT NULL,
  gender VARCHAR(6) NOT NULL,
  email VARCHAR(20)
);

-- product table
CREATE TABLE product (
  id SERIAL NOT NULL PRIMARY KEY,
  productName VARCHAR(20) NOT NULL,
  productPrice FLOAT(2) NOT NULL  
);

-- service table
CREATE TABLE service (
  id SERIAL NOT NULL PRIMARY KEY,
  serviceName VARCHAR(20) NOT NULL,
  service FLOAT(2) NOT NULL,
  product_id INT references product(id)  
);
CREATE TABLE orders (
  id SERIAL NOT NULL PRIMARY KEY,
  client_id INT REFERENCES public.client(id),
  service_id INT REFERENCES public.service(id),
  stylist_id INT REFERENCES public.stylist(id),
  orderDate DATE   
);

--  Insert data into the tables

INSERT INTO client (firstName, secondName, gender, email)
  VALUES ('John', 'White', 'Male', 'aa@uu.com'), ('Jane', 'Brown', 'Female', 'jj@bb.com');
  
INSERT INTO stylist (firstName, secondName, gender, email)
  VALUES ('Bob', 'Red', 'Male', 'bb@rr.com'), ('Helene', 'Green', 'Female', 'hh@gg.com'); 

INSERT INTO product (productName, productPrice)
  VALUES ('Cream1', '9.99'), ('Cream2', '19.99'); 
  
  INSERT INTO service (serviceName, service, product_id)
  VALUES ('service1', '9.99', '1'), ('service2', '19.99', '2'); 
  
  INSERT INTO orders (client_id, service_id, stylist_id, orderDate )
  VALUES ('1', '1', '1', '2020-10-17'), ('2', '2', '2', '2020-10-17');   
  
