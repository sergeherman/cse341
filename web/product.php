<?php
require "dbconnect.php";
$db = get_db();

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

<?php
echo " PRODUCTS LIST:"."<br>";
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