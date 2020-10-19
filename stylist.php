<?php
include_once 'mydbtest/dbh.mydbtest.php';
?>

<!DOCTYPE html>
<html>
<head>
 <tytle></tytle>
 </head>
 <body>
 <?php
$sql = "select firstName, secondName, gender, email
from stylist 
order by secondName";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

echo " Stylists list:"."<br>";

if ($resultCheck >0) {
	while ($row = mysqli_fetch_assoc($result)) {
		echo $row['firstName']."   ";
		echo $row['secondName'].", ";
		echo $row['gender'].", ";
		echo $row['email']."<br>";
}
}
?>
 
 </body>
 </html>