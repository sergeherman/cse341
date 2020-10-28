<?php
require "dbconnect.php";
$db = get_db();

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>STYLITS</title>
  <link rel="stylesheet" href="mystyle.css">
</head>
<body>
<h3> Add new stylist</h3> 
<form method="post" action="addstylist.php">
First Name: <input type="text" name="firstname">
Second Name: <input type="text" name="secondname"><br><br>
Gender: <input type="text" name="gender">
E-mail: <input type="text" name="email"><br><br>
<input type='submit' value='Add Stylist'>
</form>
<h3> Delete the latest stylist record</h3> 
<form method="post" action="deletestylist.php">
<input type='submit' value='Delete record'>
</form>
<h3> Clients List</h3> 
<?php
try {

  $statement = $db->prepare('SELECT firstname , secondname , gender, email from stylist order by  id desc;');
  $statement->execute();

  while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
    $firstname = $row['firstname'];
    $secondname = $row['secondname'];
    $gender = $row['gender'];
    $email = $row['email'];

    echo "<p> Stylist name: $firstname  $secondname, Gender:  $gender, Email:  $email</p>";

  }
} catch (Exception $ex) {
  echo "$ex";
}




?>
 
</body>
</html>