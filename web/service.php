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
$sql = "select sv.serviceName 'serviceName', sv.service 'servicePrice',
p.productName 'productName', p.productPrice 'productPrice'
from product p, service sv
where sv.product_id = p.id 
order by sv.serviceName;";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

echo " Services list:"."<br>";

if ($resultCheck >0) {
	while ($row = mysqli_fetch_assoc($result)) {
		echo $row['serviceName'].", Service price:   ";
		echo $row['servicePrice'].", product used:";
		echo $row['productName'].", Product price";
		echo $row['productPrice']."<br>";
}
}
?>
 
 </body>
 </html>