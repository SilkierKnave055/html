<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Procesarformulario</title>
</head>
<body>
    <?php
    //Insertar Clientes (Recogemos las variables del formulario)
        $DNI = $_POST["DNI"];
        $nombre = $_POST["nombre"];
        $telefono = $_POST["telefono"];
    //Insertar Panes (Recogemos las variables del formulario)
        $id = $_POST["id"];
        $tipo = $_POST["tipo"];
        $masa = $_POST["masa"];
        $cantidad = $_POST["cantidad"];
    //Insertar Pedidos (Recogemos las variables del formulario)
        $numero = $_POST["numero"];
        $DNI = $_POST["DNI_cliente"];
        $nombre = $_POST["nombre_cliente"];
        $id = $_POST["id_pan"];
        $tipo = $_POST["tipo_pan"];
    //Creamos las variables para la conexion a la BBDD
         $servername = 'localhost';
         $username = 'phpmyadmin';
         $password = 'phpmyadmin';
    //Hacemos la conexion a la BBDD
    $conexion = new mysqli($servername, $username, $password);
    //Si no conseguimos la conexion, terminamos la conexion, sino, lanzamos mensaje de conexion exitosa.
    if (!$conexion) {
        die("Conexión fallida:". $conexion->connect_error);
    } else {  
    echo "Conexión exitosa";
    }
    //Seleccionamos la base de datos con los datos para la conexion y el nombre de la BBDD
        mysqli_select_db($conexion,"panaderia");
    //Insertamos en tabla Clientes, en campo DNI, nombre y telefono, los valores sacados respectivamente de las variables
        $clientes = "INSERT Clientes (DNI,nombre,telefono)
                            VALUES ('$DNI','$nombre','$telefono')";
        mysqli_query($conexion,$clientes);
        
    /////Insertar panes
        $panes = "INSERT Panes (id,tipo,masa,cantidad)
                            VALUES ('$id','$tipo','$masa','$cantidad')";
        mysqli_query($conexion,$panes);
    ////Insertar pedidos
        $pedidos = "INSERT Pedidos (numero,DNI_cliente,nombre_cliente,id_pan,tipo_pan)
                            VALUES ('$numero','$DNI_cliente','$nombre_cliente','$id_pan','$tipo_pan')";
        mysqli_query($conexion,$pedidos);
    //Cerrar conexion con la Base de datos
    $conexion->close();

    ?>
</body>
</html>