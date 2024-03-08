<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Ejercicio 3</title>
</head>
<body>
    <?php
    $num = 1;
    while ($num <= 50) {
        echo "El cuadrado de ", $num, " es: ", $num*$num, "<br>";
        $suma = ($num*$num) + $suma;
        $num++;
        }
        echo "<br>", "La suma de los cuadrados de los números es: ", $suma;
        ?>
</body>
</html>