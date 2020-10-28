<?php

require "dbconnect.php";
$db = get_db();

$stmt = $db->prepare('DELETE FROM orders WHERE id = (select MAX(id) from orders);');

$stmt->execute();

$new_page = "orders.php";

header("Location: $new_page");
die();

?>