<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $a = 2;
     switch ($a) {
        case '0':
            echo "a es igual a 0";
            break;
        case '1':
            echo "a es igual a 1";
            break;
        case '2':
            echo "a es igual a 2";
            break;
        default:
            echo "a es distinto de 0, 1 o 2";
            break;
     }
     echo "<hr>";
    //Dado los valores de dos variables vamos a comprobar si su multiplicacion da par o impar.
    $a = 5;
    $b = 8;
    switch (($a*$b) % 2) {
        case 0:
            echo "El número es par";
            break;
        default:
            echo "El número es impar";
            break;
    }
    ?>
</body>
</html>