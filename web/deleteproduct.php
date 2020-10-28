<?php

require "dbconnect.php";
$db = get_db();

$stmt = $db->prepare('DELETE FROM product WHERE id = (select MAX(id) from product);');

$stmt->execute();

$new_page = "product.php";

header("Location: $new_page");
die();

?>