<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Wk 3, Grp 4</title>
        <meta name="description" content="Week 3 team assignment">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
    <p>Name: <?php echo $_POST["name"]; ?></p>
    <p>Email: <?php echo $_POST["email"]; ?></p>
    <p>Major: <?php echo $_POST["major"]; ?></p>
    <p>Comments: <?php echo $_POST["comments"]; ?></p>
    <p>Continent: <?php

        $continents = $_POST["continents"];
        $count = count($continents);
        $continentsName = ["North America","South America","Europe","Asia","Australia","Africa","Antractica"];
        $codenames = ['na', 'sa', 'eu', 'as', 'au', 'af','an'];
        $map = array();
        
        for ($i = 0 ; $i<count($codenames); $i++){
            $map = array($codenames[$i] => $continentsName[$i]);
        }
        //I have no idea with stretch challenge #2. I do not even understand clearly the direction. Do we need to change names in form in index.php
        //to 'na' instead of 'North America' and in the welcome.php we use 'na' as a key to get the value of the key: 'North America'?
        //I tried more than 2 hours and I looked up instructor's solution. Makes me confused even more.
        
        
        for ($i = 0; $i < $count ; $i++){
            echo($continents[$i]." " );
            
        }

    ?>
        <script src="" async defer></script>
    </body>
</html>






