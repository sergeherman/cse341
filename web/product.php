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
</head>
<body>
<h2> PRODUCTS LIST</h2>;
<form method="post" action="addproduct.php">
Product Name: <input type="text" name="productname"><br>
Product Price: <input type="text" name="productprice"><br>
<input type='submit' value='Add Product'>
</form>

<?php

try {

  $statement = $db->prepare('SELECT productName, productPrice from product order by productName;');
  $statement->execute();

  while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
    $productname = $row['productname'];
    $productprice = $row['productprice'];
    
    echo "<p> Product name: $productname, Product price:  $productprice</p>";

  }
} catch (Exception $ex) {
  echo "$ex";
}




?>
 
</body>
</html>