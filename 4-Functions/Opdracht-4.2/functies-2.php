<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function rekenUIT ($num1,$num2,$num3){
        $answer = $num1 + $num2 + $num3;
        return $answer;
    }
    echo "als ik de getallen 4, 2 en 9 bij elkaar optel, is de uitkomst".rekenUIT(4,2,9)."<br>"; 
    echo "als ik de getallen 1, 2 en 3 bij elkaar optel, is de uitkomst".rekenUIT(1,2,3)."<br>";
    echo "als ik de getallen 40, 28 en 91 bij elkaar optel, is de uitkomst".rekenUIT(40,28,91)."<br>"; 

    ?>
</body>
</html>