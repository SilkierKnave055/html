<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 8</title>
</head>
<body>
    <?php
    echo "<p> Nombre del servidor: " . $_SERVER['SERVER_NAME'] . "</p>";
    var_dump($_SERVER['SERVER_NAME']);
    echo "<p> Direccion IP del servidor: " . $_SERVER['SERVER_ADDR'] . "</p>";

    $target_dir = "imagenes/";

    //Ruta completa del archivo subido
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

    echo "<p> La ruta donde se guardan las imágenes es: ". $target_file. "</p>"
    ?>
</html>