<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Do while</title>
</head>
<body>
    <?php
    //Estructura de control de flujo do while
    $valor = 10;
    //While
    while ($valor != 10) {
        echo "Dentro del while";
    }
    //Do while
    do {
        echo "Dentro del do while";
    } while ($valor != 10);
    ?>
</body>
</html>