<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method = "Post" action="advanced-2.php"> 
        <label for="name">naam</label>
        <input type="text" id="name" name="name" value=""><br><br>
        <label for="name">leeftijd</label>
        <input type="text" id="leeftijd" name="leeftijd" value=""><br><br>
        <label for="name">muzieksmaak</label>
        <input type="text" id="muzieksmaak" name="muzieksmaak" value=""><br><br>
        <label for="name">woonplaats</label>
        <input type="text" id="woonplaats" name="woonplaats" value=""><br><br>
        <label for="name">sport</label>
        <input type="text" id="sport" name="sport" value=""><br><br>
        <label for="name">lievelingseten</label>
        <input type="text" id="lievelingseten" name="lievelingseten" value=""><br><br> 
        <label for="name">border dikte</label>
        <input type="nummer" id="border_dikte" name="border_dikte" value=""><br><br> 

    <select name="background_color">
        <?php
            $background_color = array("red", "blue", "green", "black", "brown");
            foreach ($background_color AS $color){
            echo "<option value=$color>$color</option>";
            }
        ?>
    </select>
    <input type="submit" value="Submit">    
</form>
</body>
</html>

