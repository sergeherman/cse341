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
echo " SERVICES LIST:"."<br>";
try {

  $statement = $db->prepare('SELECT sv.serviceName, sv.service , p.productName , p.productPrice from product p, service sv where sv.product_id = p.id  order by sv.serviceName;');
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