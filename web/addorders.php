<?php
$orderdate = htmlspecialchars($_POST['orderdate']);
$client_id = htmlspecialchars($_POST['client_id']);
$stylist_id = htmlspecialchars($_POST['stylist_id']);
$service_id = htmlspecialchars($_POST['service_id']);

require "dbconnect.php";
$db = get_db();
echo "$orderdate $client_id $stylist_id $service_id"
// $stmt = $db->prepare('INSERT INTO orders (client_id, service_id, stylist_id, orderdate ) VALUES (:client_id, :service_id, :stylist_id, :orderdate);');
// $stmt->bindValue(':orderdate', $orderdate, PDO::PARAM_STR);
// $stmt->bindValue(':client_id', $client_id, PDO::PARAM_INT);
// $stmt->bindValue(':stylist_id', $stylist_id, PDO::PARAM_INT);
// $stmt->bindValue(':service_id', $service_id, PDO::PARAM_INT);
// $stmt->execute();

// $new_page = "orders.php";

// header("Location: $new_page");
die();

?>