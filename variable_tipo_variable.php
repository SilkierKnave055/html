<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $nombre = "cantidad";
    //Es lo mismo que hacer $cantidad=5;
    $$nombre = 5;
    echo "Este es el valor de la variable nombre: ", $nombre, "<br>";
    echo "Este es el valor de la variable cantidad: ", $cantidad, "<br>";
    echo "La variable nombre es de tipo ", var_dump($nombre), "<br>";
    echo "La variable cantidad es de tipo ", var_dump($cantidad);
    ?>    
</body>
</html>
