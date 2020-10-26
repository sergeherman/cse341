<?php
$productname = htmlspecialchars($_POST['productname']);
$productprice = htmlspecialchars($_POST['productprice']);

require "dbconnect.php";
$db = get_db();

$stmt = $db->prepare('INSERT INTO product (productname, productprice) VALUES (:productname, :productprice);');
$stmt->bindValue(':productname', $productname, PDO::PARAM_STR);
$stmt->bindValue(':productprice', $productprice, PDO::PARAM_STR);

$stmt->execute();

$new_page = "product.php";

header("Location: $new_page");
die();

?>