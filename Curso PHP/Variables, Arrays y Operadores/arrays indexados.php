<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays indexados</title>
</head>
<body>
    <?php
    /*Arrays indexados, toman valores numéricos por defecto.*/
    
    //Toman las posiciones por defecto, del 0 al 6, las cadenas tipo string van entre comillas.
    $dias = array("Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado", "Domingo");
    //Toman las posiciones por defecto, del 0 al 3, los números no van entre comillas.
    $numeros = array(10, 20, 30, 40);
    //Si ponemos un valor, no crea un array de un valor, si no un array de diez posiciones (en este caso).
    $nombres = array(10);
    //Para crear un array vacío, no escribimos nada dentro de él.
    $datos = array();
    //La sintaxis corta es con corchetes, no hace falta escribir la palabra arrays.
    $valores = [10, 20, 30, 40];
    echo $dias[3], "<br>";
    var_dump($dias);
    
    ?>
</body>
</html>