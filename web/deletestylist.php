<?php

require "dbconnect.php";
$db = get_db();

$stmt = $db->prepare('DELETE FROM stylist WHERE id = (select MAX(id) from stylist);');

$stmt->execute();

$new_page = "stylist.php";

header("Location: $new_page");
die();

?>