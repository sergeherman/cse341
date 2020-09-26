<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <script src="myScript.js"></script>
  <title>cse341 week 2 enhancement</title>

    </head>
    <body>
    
    <header>
	<div class="header">
  <a href="#default" class="logo">Charlie Chaplin Personal Homepage</a>
  <div class="header-right">
    <a class="active" href="home.php">Introduction</a>
    <a href="assignments.php">Assignments</a>
  </div>
</div>
      
    </header>
    <main>
<button class="button button2" onclick="myFunction()">Click for my motto</button>
<h2 id="demo"></h2>

	<div class="row"> 
  <div class="column">
     <p>My name is Charles Spencer Chaplin</p><img src="440px-Charlie_Chaplin_portrait.jpg" alt="MyPhoto" style="width:100%">
     <p>My father was absent and my mother struggled financially, and I was sent to a workhouse twice before the age of nine</p><img src="340px-Chaplin_The_Kid_2_crop.jpg" alt="MyPhotoKid" style="width:100%">

  </div>
  <div class="column">
	 <p>I was born on 16 April 1889 in Walworth, London, England</p><img src="Chaplin_and_Purviance_in_Work.jpg" alt="MyPhotoDoll" style="width:100%">
     <p>I began performing at an early age, touring music halls and later working as a stage actor and comedian</p><img src="340px-Poster_-_A_Dog's_Life_01.jpg" alt="MyPhotoDog" style="width:100%">
  </div>  
  <div class="column">
     <p>My dream was to become comic actor, filmmaker, and composer</p><img src="440px-Chaplin_Making_a_Living_2.jpg" alt="MyPhotoLiving" style="width:100%">
     <p>At 19, I was signed to the prestigious Fred Karno company, which took me to America.</p><img src="340px-Charlie_Chaplin_with_doll.jpg" alt="MyPhotoWork"style="width:100%">
  </div>
  <div class="column">
     <p>My childhood in London was one of poverty and hardship</p><img src="Chaplin_the_gold_rush_boot.jpg" alt="MyPhotoGold" style="width:100%">    
     <p>I soon developed the Tramp persona and formed a large fan base.</p><img src="1920px-Firma_de_Charles_Chaplin.svg.png" alt="MyPhotoFirma" style="width:100%">
  </div>
</div>

    </main>
    <footer class="example">
	<p> Charlie Chaplin Personal Homepage </p>
	<p> Address: 1416 N. La Brea Avenue Hollywood, Los Angeles, California </p>
	
	<?php echo "The server time is " . date("h:i:sa"); ?>

	</footer>
    
    </body>
    </html>
    
 
</body>
</html>