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
  <link rel="stylesheet" href="mystyle.css">
</head>
<body>
<h3> Add new service</h3> 
<form method="post" action="addservice.php">
Service Name: <input type="text" name="servicename">
Service Price: <input type="text" name="service"><br><br>
Product ID: <input type="text" name="product_id"><br><br>
<input type='submit' value='Add Service'>
</form>
<h3> Delete the latest service record</h3> 
<form method="post" action="deleteservice.php">
<input type='submit' value='Delete record'>
</form>
<h3> Services List</h3> 

<table>
  <tr>
    <th>Service name</th>
    <th>Service price</th>
    <th>Product name</th>
    <th>Product price</th>
  </tr>
<?php
try {

  $statement = $db->prepare('SELECT sv.serviceName, sv.service , p.productName , p.productPrice from product p, service sv where sv.product_id = p.id  order by sv.id desc;');
  $statement->execute();

  while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
    $servicename = $row['servicename'];
    $service = $row['service'];
    $productname = $row['productname'];
    $productprice = $row['productprice'];

    echo "<tr>
    <td>$servicename</td>
    <td>$service</td>
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