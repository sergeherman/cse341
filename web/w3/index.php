<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Wk 3, Grp 4</title>
        <meta name="description" content="Week 3 Team assignment">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        <main>
        <form action="welcome.php" method="post">
            <label for="name">Name</label>
            <input type="text" id="name" name="name">
            <label for="email">Email</label>
            <input type="text" id="email" name="email">
               <div>
            <p>Major</p>
            <label for="cs">Computer Science</label>
            <input type="radio" id="cs" name="major" value="Computer Science">
            <label for="wdd">Web Design and Development</label>
            <input type="radio" id="wdd" name="major" value="Web Design and Development">
            <label for="cit">Computer Information Technology</label>
            <input type="radio" id="cit" name="major" value="Computer Information Technology">
            <label for="ce">Computer Engineering</label>
            <input type="radio" id="ce" name="major" value="Computer Engineering">
            </div>
            <label for="comments">Comments</label>
            <input type="textarea" id="comments" name="comments">
            <div>
                <input type="checkbox" name="continents[]" id="namerica" value="North America">
                <label for="namerica">North America</label>
                <input type="checkbox" name="continents[]" id="samerica" value="South America">
                <label for="samerica">South America</label>
                <input type="checkbox" name="continents[]" id="Europe" value="Europe">
                <label for="europe">Europe</label>
                <input type="checkbox" name="continents[]" id="asia" value="Asia">
                <label for="asia">Asia</label>
                <input type="checkbox" name="continents[]" id="australia" value="Australia">
                <label for="australia">Australia</label>
                <input type="checkbox" name="continents[]" id="africa" value="Africa">
                <label for="africa">Africa</label>
                <input type="checkbox" name="continents[]" id="antartica" value="Antartica">
                <label for="antartica">Antartica</label>
            </div>
            <input type="submit">
        </form>
        </main>
        <script src="" async defer></script>
    </body>
</html>