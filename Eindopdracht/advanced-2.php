<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color: <?php echo $_POST["background_color"]; ?>">
<table style="border: <?php echo $_POST["border_dikte"]?>px solid black;">
        <tr>
    <th>naam</th>
    <th>leeftijd</th>
    <th>muzieksmaak</th>
    <th>woonplaats</th>
    <th>sport</th>
    <th>lievelingseten</th>
  </tr> 
    <?php
echo "<td>".$_POST['name'] . "</td>";
echo "<td>".$_POST['leeftijd'] . "</td>";
echo "<td>".$_POST['muzieksmaak'] . "</td>";
echo "<td>".$_POST['woonplaats'] . "</td>";
echo "<td>".$_POST['sport'] . "</td>";
echo "<td>".$_POST['lievelingseten'] . "</td>";


?>
  </tr>
</table>
</body>
</html>
