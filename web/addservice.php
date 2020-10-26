<?php
$servicename = htmlspecialchars($_POST['servicename']);
$service = htmlspecialchars($_POST['service']);
$product_id = htmlspecialchars($_POST['product_id']);

require "dbconnect.php";
$db = get_db();

$stmt = $db->prepare('INSERT INTO stylist (servicename, service, product_id) VALUES (:servicename, :service, :gender, :email);');
$stmt->bindValue(':servicename', $servicename, PDO::PARAM_STR);
$stmt->bindValue(':service', $service, PDO::PARAM_STR);
$stmt->bindValue(':product_id', $product_id, PDO::PARAM_INT);
$stmt->execute();

$new_page = "service.php";

header("Location: $new_page");
die();

?>