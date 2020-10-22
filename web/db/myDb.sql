DROP TABLE IF EXISTS client, product, service, services, stylist 
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
  productPrice DOUBLE NOT NULL  
);

-- service table
CREATE TABLE service (
  id SERIAL NOT NULL PRIMARY KEY,
  serviceName VARCHAR(20) NOT NULL,
  service DOUBLE NOT NULL,
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
  

select firstName 'Client firstName', secondName 'Client secondName', gender, email
from client 
order by secondName;

select firstName 'Stylist firstName', secondName 'Stylist secondName', gender, email
from stylist 
order by secondName;

select productName 'productName', productPrice 'productPrice'
from product
order by productName;

select sv.serviceName 'serviceName', sv.service 'servicePrice',
p.productName 'productName', p.productPrice 'productPrice'
from product p, service sv
where sv.product_id = p.id 
order by sv.serviceName;

select c.firstName 'Client firstName', c.secondName 'Client secondName', 
s.firstName 'Stylist firstName', s.secondName 'Stylist secondName',
p.productName 'productName', p.productPrice 'productPrice',
sv.serviceName 'serviceName', sv.service 'servicePrice',
o.orderDate 'orderDate'
from client c, stylist s, product p, service sv, orders o
where o.client_id = c.id and o.stylist_id = s.id and o.service_id = sv.id  and sv.product_id = p.id 
order by o.orderDate;