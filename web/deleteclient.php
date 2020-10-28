<?php

require "dbconnect.php";
$db = get_db();

$stmt = $db->prepare('DELETE FROM client WHERE id = (select MAX(id) from client);');
// $stmt->bindValue(':firstname', $firstname, PDO::PARAM_STR);
// $stmt->bindValue(':secondname', $secondname, PDO::PARAM_STR);
// $stmt->bindValue(':gender', $gender, PDO::PARAM_STR);
// $stmt->bindValue(':email', $email, PDO::PARAM_STR);
$stmt->execute();

$new_page = "client.php";

header("Location: $new_page");
die();

?>