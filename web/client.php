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
  <link rel="stylesheet" href="mystyle.css">
  
</head>
<body>
<div class="header">
  <a class="logo">Bob’s Salon web application with database </a>
  <div class="header-right">
    <a  href="welcome.php">Home</a>
    <a class="active" href="#client">Clients</a>
    <a href="stylist.php">Stylists</a>
    <a href="product.php">Products</a>
    <a href="service.php">Services</a>
    <a href="orders.php">Orders</a>
  </div>
</div>
<br>
<h3> Add new client</h3> 
<form method="post" action="addclient.php">
First Name: <input type="text" name="firstname">
Second Name: <input type="text" name="secondname"><br><br>
Gender: <input type="text" name="gender">
E-mail: <input type="text" name="email"><br><br>
<input type='submit' value='Add Client'>
</form>
<h3> Delete the latest client record</h3> 
<form method="post" action="deleteclient.php">
<input type='submit' value='Delete record'>
</form>
<h3> Clients List</h3> 

<table>
  <tr>
    <th>Client id</th>
    <th>Client name</th>
    <th>Gender</th>
    <th>Email</th>
  </tr>
  
<?php

try {

  $statement = $db->prepare('SELECT id, firstname , secondname , gender, email from client order by id desc;');
  $statement->execute();

  while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
    $id = $row['id'];
    $firstname = $row['firstname'];
    $secondname = $row['secondname'];
    $gender = $row['gender'];
    $email = $row['email'];

    echo "<tr>
    <td>$id</td>
    <td>$firstname  $secondname</td>
    <td>$gender</td>
    <td>$email</td> 
    </tr>";

  }
} catch (Exception $ex) {
  echo "$ex";
}


die();
?>

</table>

<footer>
  <p>	&copy 2020 Bob’s Salon web application with database</p>
</footer>
</body>
</html>