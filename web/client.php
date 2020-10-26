<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<h2> CLIENTS LIST<h2> 

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
 
<!-- <form method="post" action="addclient.php">
<textarea name = "firstname"><textarea>
<textarea name = "secondname"><textarea>
<textarea name = "gender"><textarea>
<textarea name = "email"><textarea>
<input type="submit" value="Create Client">
</form> -->

</body>
</html>