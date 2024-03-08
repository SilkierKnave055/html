<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //Funciones variadas de arrays

    //La función count cuenta los elementos del array.
    $frutas = array ("naranja", "plátano", "manzana", "frambuesa");
    $elementos = count($frutas);
    echo $elementos . "<br>";
    
    //Me muestra el elemento del array en el que se sitúe el puntero.
    $actual = current ($frutas);
    echo $actual .  "<br>";

    //Coloca el puntero al final del array.
    end ($frutas);

    $actual = current($frutas);
    echo $actual .  "<br>";

    //Vuelve a situar el puntero al principio del array.
    reset ($frutas);

    $actual = current($frutas);
    echo $actual .  "<br>";

    //La función array_search busca un elemento y te da la key y el elemento en un array.
    $meses = array(0 => "Enero", 1 => "Febrero", 2 => "Marzo", 3 => "Abril");
    $clave = array_search ("Febrero", $meses);

    if ($clave) {
        echo $clave . " " . $meses [$clave];
    } else {
        echo "Elemento no encontrado";
    }
    ?>
</body>
</html>