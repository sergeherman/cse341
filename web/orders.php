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
<div class="header">
  <a class="logo">Bob’s Salon web application with database </a>
  <div class="header-right">
    <a  href="welcome.php">Home</a>
    <a  href="client.php">Clients</a>
    <a href="stylist.php">Stylists</a>
    <a href="product.php">Products</a>
    <a href="service.php">Services</a>
    <a class="active" href="#orders">Orders</a>
  </div>
</div>
<br>
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
    <th>Client id</th>
    <th>Stylist id</th>
    <th>Service name</th>
    <th>Service price</th>
    <th>Product name</th>
    <th>Product price</th>
    <th>Order date</th>
  </tr>
<?php
try {
  $statement = $db->prepare('SELECT o.id as o_id, c.id as c_id, s.id as s_id, p.productName , p.productPrice , sv.serviceName , sv.service , o.orderDate from client c, stylist s, product p, service sv, orders o where o.client_id = c.id and o.stylist_id = s.id and o.service_id = sv.id  and sv.product_id = p.id order by o.id desc;');
  $statement->execute();

  while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
    $id = $row['o_id'];
		$cid = $row['c_id'];
		$sid = $row['s_id'];
    $servicename = $row['servicename'];
    $service = $row['service'];
    $productname = $row['productname'];
		$productprice = $row['productprice'];
		$orderdate = $row['orderdate'];


    echo "<tr>
    <td>$id</td>
    <td>$cid</td>
    <td>$sid</td>
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

 <footer>
  <p>	&copy 2020 Bob’s Salon web application with database</p>
</footer>
</body>
</html>