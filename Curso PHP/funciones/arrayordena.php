<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //Arrays y ordenación

    $dias = array ("Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sabado", "Domingo");
    var_dump ($dias);
    echo "<br>";

    //La funcion sort, ordena el contenido de menor a mayor en orden alfabetico, pero no ordena las keys
    sort ($dias);
    var_dump($dias);
    echo "<br>";

    //La funcion rsort, ordena el contenido de mayor a menor en orden alfabetico, pero no ordena las keys
    rsort($dias);
    var_dump($dias);
    echo "<br>";

    //La funcion asort, ordena el contenido de menor a mayor en orden alfabetico, y también ordena los keys
    asort($dias);
    var_dump($dias);
    echo "<br>";

    //La funcion ksort, ordena el array por sus keys, de menor a mayor.
    $numeros = array (10, 11, 8, 103, 99, 54);
    var_dump ($numeros);
    echo "<br>";
    //Un array indexado no lo ordena.
    ksort ($numeros);
    var_dump ($numeros);
    echo "<br>";
    //Un array asociativo si lo ordena
    $arraynombres = array ("Javier" => "29", "Patricia" => "18", "Emilio" => "26");
    var_dump($arraynombres);
    echo "<br>";
    //Se ordena por las keys (en este caso, el nombre de las personas).
    ksort($arraynombres);
    var_dump($arraynombres);
    echo "<br>";

    //La funcion shuffle ordena el array de forma aleatoria.
    shuffle ($numeros);
    var_dump ($numeros);
    echo "<br>"
    ?>
</body>
</html>