<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color: <?php echo $_POST["kleur"] ?>">
    
</body>
</html>
<?php
echo "naam: ".$_POST['name'] . "<br>";
echo "leeftijd: ".$_POST['leeftijd'] . "<br>";
echo "muzieksmaak: ".$_POST['muzieksmaak'] . "<br>";
echo "woonplaats: ".$_POST['woonplaats'] . "<br>";
echo "sport: ".$_POST['sport'] . "<br>";
echo "lievelingseten: ".$_POST['lievelingseten'] . "<br>";
?>