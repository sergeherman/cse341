<?php
require "dbconnect.php";
$db = get_db();

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PRODUCTS</title>
  <link rel="stylesheet" href="mystyle.css">
</head>
<body>
<div class="header">
  <a class="logo">Bob’s Salon web application with database </a>
  <div class="header-right">
    <a  href="welcome.php">Home</a>
    <a  href="client.php">Clients</a>
    <a href="stylist.php">Stylists</a>
    <a class="active" href="#product">Products</a>
    <a href="service.php">Services</a>
    <a  href="orders.php">Orders</a>
  </div>
</div>
<br>
<h3> Add new product</h3> 
<form method="post" action="addproduct.php">
Product Name: <input type="text" name="productname"><br><br>
Product Price: <input type="text" name="productprice"><br><br>
<input type='submit' value='Add Product'>
</form>
<h3> Delete the latest product record</h3> 
<form method="post" action="deleteproduct.php">
<input type='submit' value='Delete record'>
</form>
<h3> Products List</h3> 

<table>
  <tr>
    <th>Product id</th>
    <th>Product name</th>
    <th>Product price</th>
  </tr>
<?php

try {
  $statement = $db->prepare('SELECT id, productName, productPrice from product order by id desc;');
  $statement->execute();

  while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
    $id = $row['id'];
    $productname = $row['productname'];
    $productprice = $row['productprice'];
    
    echo 
    "<tr>
    <td>$id</td>
    <td>$productname</td>
    <td>$productprice</td> 
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