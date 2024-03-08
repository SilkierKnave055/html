<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $num1 = 5;
    $num2 = 10;
    $num3 = 5;
    $valor1 = "5";

    //Operadores de comparación
    if ($num1 == $num3) {
        echo "Num1 y Num3 son iguales";
    } else {
        echo "Num1 y Num2 son distintos";
    }

    if ($num1 == $valor1) {
        echo "<br>", "Los valores num1 y valor1 son idénticos";
    }
    ?>
</body>
</html>