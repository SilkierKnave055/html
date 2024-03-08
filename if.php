<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $x = 7;
    $y = 4;
    if ($x > $y) {
        echo "x es mayor que y";
    } elseif ($x == $y) {
        echo "x es igual que y";
    } else {
        echo "x es menor que y";
    }
    echo "<br>", $x, "<br>";
    $y = &$x;
    echo $x, "<br>";
    if ($x > $y) {
        echo "x es mayor que y";
    } elseif ($x == $y) {
        echo "x es igual que y";
    } else {
        echo "x es menor que y";
    }
    echo "<hr>";
    //Dado los valores de dos variables vamos a comprobar si su multiplicacion da par o impar.
    $a = 5;
    $b = 8;
    if (($a * $b) % 2 == 0) {
        echo "El número es par";
    } else {
        echo "El número es impar";
    }
    ?>
</body>
</html>