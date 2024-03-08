<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
</head>

<body>
    <?php
    $num = 1;
    for ($num = 1; $num <= 100; $num++) {
        if ($num % 5 == 0) {
            echo $num, "<br>";
            $suma += $num;
        }
    }
    echo "El cuadrado de la suma es ", $suma * $suma;
    ?>
</body>

</html>