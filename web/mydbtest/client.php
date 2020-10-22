<?php
require "dbconnect.php";
$db = get_db();

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Client List</title>
</head>
<body>

<?php

try {

  $statement = $db->prepare('SELECT firstname , secondname , gender, email FROM client ORDER BY secondname;');
  $statement->execute();

  while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
    $firstname = $row['firstname'];
    $secondname = $row['secondname'];
    $gender = $row['gender'];
    $email = $row['email'];

    echo "<p> $firstname , $secondname , $gender , $email</p>";

  }
} catch (Exception $ex) {
  echo "$ex";
}




?>
 
</body>
</html>
