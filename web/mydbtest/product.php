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
$sql = "select productName 'productName', productPrice 'productPrice'
from product
order by productName;";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

echo " Products list:"."<br>";

if ($resultCheck >0) {
	while ($row = mysqli_fetch_assoc($result)) {
		echo $row['productName'].", price:    ";
		echo $row['productPrice']."<br>";
}
}
?>
 
 </body>
 </html>