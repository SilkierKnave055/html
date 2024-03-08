<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //Funciones para modificar arrays.

    $frutas = array ("naranja", "platano", "manzana", "frambuesa");
    var_dump ($frutas);
    echo "<br>";
    //La funcion array_shift elimina el primer elemento del array.
    $eliminado = array_shift ($frutas);
    var_dump ($eliminado);
    echo "<br>";
    var_dump ($frutas);
    //La funcion array_unshift añade un elemento en la primera posición del array.
    array_unshift ($frutas, "pera");
    echo "<br>";
    var_dump($frutas);
    
    echo "<hr>";

    //La funcion array_pop elimina el primer elemento del array.
    $eliminado = array_pop($frutas);
    var_dump($eliminado);
    echo "<br>";
    var_dump($frutas);
    //La funcion array_unshift añade un elemento en la primera posición del array.
    array_push($frutas, "pera");
    echo "<br>";
    var_dump($frutas);
    ?>
</body>
</html>