<?php
    try{
        $dbUrl = getenv('DATABASE_URL');
        
        $dbOpts = parse_url($dbUrl);
        
        $dbHost = $dbOpts["host"];
        $dbPort = $dbOpts["port"];
        $dbUser = $dbOpts["user"];
        $dbPassword = $dbOpts["pass"];
        $dbName = ltrim($dbOpts["path"],'/');
        
        $db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);
        
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch (PDOException $ex){
        echo 'Error!: ' . $ex->getMessage();
        die();
    }
    function dbconnect() {
        $db = NULL;
        try{
            $dbUrl = getenv('DATABASE_URL');
            
            $dbOpts = parse_url($dbUrl);
            
            $dbHost = $dbOpts["host"];
            $dbPort = $dbOpts["port"];
            $dbUser = $dbOpts["user"];
            $dbPassword = $dbOpts["pass"];
            $dbName = ltrim($dbOpts["path"],'/');
            
            $db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);
            
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch (PDOException $ex){
            echo 'Error!: ' . $ex->getMessage();
            die();
        }
        return $db;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="mystyle.css">
</head>
<body>
<div class="header">
  <a class="logo">Bob’s Salon web application with database </a>
  <div class="header-right">
    <a href="start.php">Home</a>
    <a  href="signin.php">Sign In</a>
    <a class="active" href="#signup">Sign Up</a>
  </div>
</div>
<br><br> 
    <form method="POST">
        <label for="username">username</label>
        <input type="text" name="username" id="username"/><br><br> 
        <label for="password">password</label>
        <input type="password" name="password" id="password"/>
        <input type="submit" id="submit" name="submit" value="sign up"/><br><br> 
    </form>
    <?php
        if(isset($_POST['submit'])){
            $username = filter_input(INPUT_POST,"username", FILTER_SANITIZE_STRING);
            $password = filter_input(INPUT_POST, "password" , FILTER_SANITIZE_STRING);
            
            $passwordHash = password_hash($password, PASSWORD_DEFAULT);

            $db = dbconnect();

            $sql = "INSERT INTO login (username, password) VALUES (:username, :password)";
            $stmt = $db -> prepare($sql);

            $stmt -> bindValue(':username', $username, PDO::PARAM_STR);
            $stmt -> bindValue(':password', $passwordHash, PDO::PARAM_STR);

            $stmt -> execute();
            header('Location: signin.php');
            die();
        }
        
    ?>
<footer>
  <p>	&copy 2020 Bob’s Salon web application with database</p>
</footer>
</body>
</html>