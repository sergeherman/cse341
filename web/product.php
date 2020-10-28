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
    <th>Product name</th>
    <th>Product price</th>
  </tr>
<?php

try {
  $statement = $db->prepare('SELECT productName, productPrice from product order by id desc;');
  $statement->execute();

  while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
    $productname = $row['productname'];
    $productprice = $row['productprice'];
    
    echo 
    "<tr>
    <td>$productname</td>
    <td>$productprice</td> 
    </tr>";

  }
} catch (Exception $ex) {
  echo "$ex";
}
?>
 </table>
</body>
</html>