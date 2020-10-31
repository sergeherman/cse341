<?php
    session_start();
    
    if (isset($_SESSION['username'])){
        $username = $_SESSION['username'];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" href="mystyle.css">
</head>
<body>
<div class="header">
  <a class="logo">Bob’s Salon web application with database </a>
  <div class="header-right">
    <a class="active" href="#home">Home</a>
    <a href="client.php">Clients</a>
    <a href="stylist.php">Stylists</a>
    <a href="product.php">Products</a>
    <a href="service.php">Services</a>
    <a href="orders.php">Orders</a>
  </div>
</div>
<br><br>     
    <?php
        echo '<p>Welcome, '.$username.'</p>';
        
    ?>
    <br><br> 
    <footer>
  <p>	&copy 2020 Bob’s Salon web application with database</p>
</footer>

</body>
</html>