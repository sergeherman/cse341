<?php
$productname = htmlspecialchars($_POST['productname']);
$productprice = htmlspecialchars($_POST['productprice']);

require "dbconnect.php";
$db = get_db();

$stmt = $db->prepare('INSERT INTO product (productname, productprice) VALUES (:productname, :productprice);');
$stmt->bindValue(':productname', $firstname, PDO::PARAM_STR);
$stmt->bindValue(':productprice', $secondname, PDO::PARAM_STR);

$stmt->execute();

$new_page = "product.php";

header("Location: $new_page");
die();

?>