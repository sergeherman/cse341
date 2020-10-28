<?php

require "dbconnect.php";
$db = get_db();

$stmt = $db->prepare('DELETE FROM service WHERE id = (select MAX(id) from service);');

$stmt->execute();

$new_page = "service.php";

header("Location: $new_page");
die();

?>