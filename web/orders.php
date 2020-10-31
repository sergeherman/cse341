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
  <link rel="stylesheet" href="mystyle.css">
</head>
<body>
<h3> Add new order</h3> 
<form method="post" action="addorders.php">
Order Date YYYY-MM-DD: <input type="text" name="orderdate">
Client ID: <input type="text" name="client_id"><br><br> 
Stylist ID: <input type="text" name="stylist_id">
Service ID: <input type="text" name="service_id"><br><br>
<input type='submit' value='Add Order'>
</form>
<h3> Delete the latest order record</h3> 
<form method="post" action="deleteorders.php">
<input type='submit' value='Delete record'>
</form>
<h3> Orders List</h3> 

<table>
  <tr>
    <th>Order id</th>
    <th>Client name</th>
    <th>Stylist name</th>
    <th>Service name</th>
    <th>Service price</th>
    <th>Product name</th>
    <th>Product price</th>
    <th>Order date</th>
  </tr>
<?php
try {
  $statement = $db->prepare('SELECT o.id, c.firstName , c.secondName , s.firstName , s.secondName , p.productName , p.productPrice , sv.serviceName , sv.service , o.orderDate from client c, stylist s, product p, service sv, orders o where o.client_id = c.id and o.stylist_id = s.id and o.service_id = sv.id  and sv.product_id = p.id order by o.id desc;');
  $statement->execute();

  while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
    $id = $row['id'];
		$cfirstname = $row['c.firstName'];
		$csecondname = $row['c.secondName'];
		$sfirstname = $row['s.firstName'];
    $ssecondname = $row['s.secondName'];
    $servicename = $row['servicename'];
    $service = $row['service'];
    $productname = $row['productname'];
		$productprice = $row['productprice'];
		$orderdate = $row['orderdate'];


    echo "<tr>
    <td>$id</td>
    <td>$cfirstname  $csecondname</td>
    <td>$sfirstname  $ssecondname</td>
    <td>$servicename</td>
    <td>$service</td> 
    <td>$productname</td>
    <td>$productprice</td>
    <td>$orderdate</td> 
    </tr>";

  }
} catch (Exception $ex) {
  echo "$ex";
}
?>
 </table>
</body>
</html>