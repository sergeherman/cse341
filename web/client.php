<?php
require "dbconnect.php";
$db = get_db();

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CLIENTS</title>
</head>
<body>
<h2> CLIENTS LIST<h2> 

<form method="post" action="addclient.php">
First Name: <input type="text" name="firstname"><br>
Second Name: <input type="text" name="secondname"><br>
Gender: <input type="text" name="gender"><br>
E-mail: <input type="text" name="email"><br>
<input type='submit' value='Add Client'>
</form>

<ul>
<?php

try {

  $statement = $db->prepare('SELECT firstname , secondname , gender, email from client order by secondname;');
  $statement->execute();

  while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
    $firstname = $row['firstname'];
    $secondname = $row['secondname'];
    $gender = $row['gender'];
    $email = $row['email'];

    echo "<li><p> Client name: $firstname  $secondname, Gender:  $gender, Email:  $email</p></li>";

  }
} catch (Exception $ex) {
  echo "$ex";
}


die();
?>

</ul>
 
</body>
</html>