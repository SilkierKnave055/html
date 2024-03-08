<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //$host       = "mysql";
    //$port       = 3306;
    //$socket     = "";
    $servername = "localhost";
    $username   = "phpmyadmin";
    $password   = "phpmyadmin";
    $database   = "biblioteca";

    //Crear conexión
    $conexion = new mysqli($servername, $username, $password, $database);

    //Verificar conexión
    if (!$conexion) {
        die("Conexión fallida: " . $conexion->connect_error);
    }
    /*if ($conexion->connect_error) {
        die ("Conexión fallida: " . $conexion->connect_error);
    }*/
    echo "Conexión exitosa";

    //Cerrar conexión
    $conexion -> close();
    ?>
</body>
</html>