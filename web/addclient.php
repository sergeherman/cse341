<?php
$firstname = htmlspecialchars($_POST['firstname']);
$secondname = htmlspecialchars($_POST['secondname']);
$gender = htmlspecialchars($_POST['gender']);
$email = htmlspecialchars($_POST['email']);

echo "$firstname\n";
echo "$secondname\n";
echo "$gender\n";
echo "$email\n";
?>