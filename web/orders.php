<?php
require "dbconnect.php";
$db = get_db();

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ORDERS</title>
</head>
<body>
<h2>ORDERS LIST</h2>
<form method="post" action="addorders.php">
Order Date YYYY-MM-DD: <input type="text" name="orderdate"><br> 
Client ID: <input type="text" name="client_id"><br>
Stylist ID: <input type="text" name="stylist_id"><br>
Service ID: <input type="text" name="service_id"><br>
<input type='submit' value='Add Order'>
</form>
<?php

try {

  $statement = $db->prepare('SELECT c.firstName , c.secondName , s.firstName , s.secondName , p.productName , p.productPrice , sv.serviceName , sv.service , o.orderDate from client c, stylist s, product p, service sv, orders o where o.client_id = c.id and o.stylist_id = s.id and o.service_id = sv.id  and sv.product_id = p.id order by o.id desc;');
  $statement->execute();

  while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
		$cfirstname = $row['c.firstname'];
		$csecondname = $row['c.secondname'];
		$sfirstname = $row['s.firstname'];
    $ssecondname = $row['s.secondname'];
    $servicename = $row['servicename'];
    $service = $row['service'];
    $productname = $row['productname'];
		$productprice = $row['productprice'];
		$orderdate = $row['orderdate'];


    echo "<p> Client name: $cfirstname  $csecondname, Stylist name: $sfirstname  $ssecondname, Service name: $servicename, Service price:  $service, Product name:  $productname, Product price:  $productprice, Order date:  $orderdate</p>";

  }
} catch (Exception $ex) {
  echo "$ex";
}




?>
 
</body>
</html>