<?php
include_once 'mydbtest/dbh.mydbtest.php';
?>

<!DOCTYPE html>
<html>
<head>
 <tytle></tytle>
 </head>
 <body>
 <?php
$sql = "select c.firstName 'Client firstName', c.secondName 'Client secondName', 
s.firstName 'Stylist firstName', s.secondName 'Stylist secondName',
p.productName 'productName', p.productPrice 'productPrice',
sv.serviceName 'serviceName', sv.service 'servicePrice',
o.orderDate 'orderDate'
from client c, stylist s, product p, service sv, orders o
where o.client_id = c.id and o.stylist_id = s.id and o.service_id = sv.id  and sv.product_id = p.id 
order by o.orderDate;";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

echo " Orders list:"."<br>";

if ($resultCheck >0) {
	while ($row = mysqli_fetch_assoc($result)) {
		echo " Client name: ";
		echo $row['Client firstName']."   ";
		echo $row['Client secondName'].", Stylist name: ";
		echo $row['Stylist firstName']." ";
		echo $row['Stylist secondName'].", service: ";
		echo $row['serviceName'].", service price: ";	
		echo $row['servicePrice'].", product: ";	
		echo $row['productName'].", product price: ";	
		echo $row['productPrice'].", order date: ";		
		echo $row['orderDate']."<br>";
}
}
?>
 
 </body>
 </html>