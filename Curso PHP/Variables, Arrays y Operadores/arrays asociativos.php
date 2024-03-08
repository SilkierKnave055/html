<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays asociativos</title>
</head>
<body>
    <?php
    /*Arrays asociativos, puedo especificar que los índices sean cadenas.*/

    //Lo primero es la clave y lo segundo es el contenido del array, se separa a través de "=>"
    $navegadores = array("navegador1" => "Chrome", "navegador2" => "Firefox", "navegador3" => "Safari");
    //Puedo mezclar valores numéricos con strings.
    $datos = array("nombre" => "Alejandro", "edad" => 21, "profesor" => false, 3 => 100);
    echo "Navegador 3: ". $navegadores["navegador3"];
    echo "<br>", $datos["nombre"];
    echo "<br>", $datos["edad"];
    echo "<br>", $datos["profesor"];
    echo "<br>", $datos[3];
    echo "<br>";
    var_dump($navegadores);
    echo "<br>";
    var_dump($datos);
    ?>
</body>
</html>