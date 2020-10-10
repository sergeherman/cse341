--client table

CREATE TABLE public.client
(
	id SERIAL NOT NULL PRIMARY KEY,
	firstName VARCHAR(20) NOT NULL,
	secondName VARCHAR(20) NOT NULL,
	gender VARCHAR(6) NOT NULL,
    email VARCHAR(20)
);

-- stylist table
CREATE TABLE public.stylist (
  id SERIAL NOT NULL PRIMARY KEY,
  firstName VARCHAR(20) NOT NULL,
  secondName VARCHAR(20) NOT NULL,
  gender VARCHAR(6) NOT NULL,
  email VARCHAR(20)
);

-- product table
CREATE TABLE public.product (
  id SERIAL NOT NULL PRIMARY KEY,
  productName VARCHAR(20) NOT NULL,
  productPrice DOUBLE NOT NULL  
);

-- service table
CREATE TABLE public.service (
  id SERIAL NOT NULL PRIMARY KEY,
  serviceName VARCHAR(20) NOT NULL,
  service DOUBLE NOT NULL,
  product_id INT references product(id)  
);
CREATE TABLE public.orders (
  id SERIAL NOT NULL PRIMARY KEY,
  client_id INT REFERENCES public.client(id) NOT NULL,
  service_id INT REFERENCES public.service(id) NOT NULL,
  stylist_id INT REFERENCES public.stylist(id) NOT NULL,
  orderDate DATE   
);