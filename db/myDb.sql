-- Create myDb
-- CREATEDB myDb

-- client table
CREATE TABLE client (
  id bigserial NOT NULL PRIMARY KEY,
  firstName VARCHAR(20)NOT NULL,
  secondName VARCHAR(20)NOT NULL,
  gender VARCHAR(6)NOT NULL,
  email VARCHAR(20)
);
-- stylist table
CREATE TABLE stylist (
  id bigserial NOT NULL PRIMARY KEY,
  firstName VARCHAR(20) NOT NULL,
  secondName VARCHAR(20) NOT NULL,
  gender VARCHAR(6) NOT NULL,
  email VARCHAR(20)
);

-- product table
CREATE TABLE product (
  id bigserial NOT NULL PRIMARY KEY,
  productName VARCHAR(20) NOT NULL,
  productPrice DOUBLE NOT NULL  
);

-- service table
CREATE TABLE service (
  id bigserial NOT NULL PRIMARY KEY,
  serviceName VARCHAR(20) NOT NULL,
  service DOUBLE NOT NULL,
  product_id int references product(id)  
);
CREATE TABLE order (
  id bigserial NOT NULL PRIMARY KEY,
  client_id int references client(id) NOT NULL,
  service_id int references service(id) NOT NULL,
  stylist_id int references stylist(id) NOT NULL,
  orderDate date   
);

PRO