<?php
$firstname = htmlspecialchars($_POST['firstname']);
$secondname = htmlspecialchars($_POST['secondname']);
$gender = htmlspecialchars($_POST['gender']);
$email = htmlspecialchars($_POST['email']);

require "dbconnect.php";
$db = get_db();

$stmt = $db->prepare('INSERT INTO stylist (firstName, secondName, gender, email) VALUES (:firstname, :secondname, :gender, :email);');
$stmt->bindValue(':firstname', $firstname, PDO::PARAM_STR);
$stmt->bindValue(':secondname', $secondname, PDO::PARAM_STR);
$stmt->bindValue(':gender', $gender, PDO::PARAM_STR);
$stmt->bindValue(':email', $email, PDO::PARAM_STR);
$stmt->execute();

$new_page = "stylist.php";

header("Location: $new_page");
die();

?>