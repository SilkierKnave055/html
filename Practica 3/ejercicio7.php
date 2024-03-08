<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 7</title>
    <style>
        .square {
        width: 50px;
        height:50px;
        margin: 5px;
        float: left;
        }
    </style>
</head>
<body>
    <?php
    //Código PHP que dibuja 100 cuadrados en la pantalla usando colores aleatorios.
    // Función para generar un color RGB aleatorio
    function colorAleatorioRGB()
    {
        $r = mt_rand(0, 255); // Componente rojo
        $g = mt_rand(0, 255); // Componente verde
        $b = mt_rand(0, 255); // Componente azul
        return "rgb($r, $g, $b)";
    }

    // Dibujar 100 cuadrados con colores aleatorios
    for ($i = 0; $i < 100; $i++) {
        $color = colorAleatorioRGB(); // Generar un color aleatorio RGB
        echo '<div class="square" style="background-color: ' . $color . ';"></div>';
    }
    ?>
</body>
</html>