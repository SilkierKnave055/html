<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elseif</title>
</head>
<body>
    <?php
    $valor1 = 2;
    $valor2 = 6;
    $dia = 5;

    //Estructura de control de flujo elseif

    if ($valor1 > $valor2) {
        echo "valor1 es mayor que valor2" , "<br>";
    } elseif ($valor1 == $valor2) {
        echo "valor1 es igual al valor2", "<br>";
    } else {
        echo "valor1 es menor que valor2", "<br>";
    }

    if ($dia == 1) {
        echo "Lunes";
    } elseif ($dia == 2) {
        echo "Martes";
    } elseif ($dia == 3) {
        echo "Miércoles";
    } elseif ($dia == 4) {
        echo "Jueves";
    } elseif ($dia == 5) {
        echo "Viernes";
    } elseif ($dia == 6) {
        echo "Sábado";
    } elseif ($dia == 7) {
        echo "Domingo";
    } else {
        echo "El día introducido no es válido";
    }
    ?>
</body>
</html>