<?php
require "dbconnect.php";
$db = get_db();

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SERVICES</title>
</head>
<body>
<h2>SERVICES LIST</h2>
<form method="post" action="addservice.php">
Service Name: <input type="text" name="servicename"><br>
Service Price: <input type="text" name="service"><br>
Product ID: <input type="text" name="product_id"><br>
<input type='submit' value='Add Service'>
</form>
<?php
try {

  $statement = $db->prepare('SELECT sv.serviceName, sv.service , p.productName , p.productPrice from product p, service sv where sv.product_id = p.id  order by id desc;');
  $statement->execute();

  while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
    $servicename = $row['servicename'];
    $service = $row['service'];
    $productname = $row['productname'];
    $productprice = $row['productprice'];

    echo "<p> Service name: $servicename, Service price:  $service, Product name:  $productname, productprice:  $productprice</p>";

  }
} catch (Exception $ex) {
  echo "$ex";
}




?>
 
</body>
</html>