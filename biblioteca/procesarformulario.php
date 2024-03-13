<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Procesarformulario</title>
</head>

<body>
    <?php
    //Recoger variables provenientes del formulario libros
    $Titulo = $_POST["Titulo"];
    $Autor = $_POST["Autor"];
    $Genero = $_POST["Genero"];
    $Editorial = $_POST["Editorial"];
    $ISBN = $_POST["ISBN"];
    $Cantidad = $_POST["Cantidad"];
    //Recoger variables provenientes del formulario usuarios
    $Usuario = $_POST["Usuario"];
    $Email = $_POST["Email"];
    $Telefono = $_POST["Telefono"];
    //Recoger variables provenientes del formulario prestamos
    $id = $_POST["id"];
    $id_libro = $_POST["id_libro"];
    $id_usuario = $_POST["id_usuario"];
    $fechainicio = $_POST["fechaincio"];
    $fechafin = $_POST["fechafin"];
    //Variables para la conexión a la BBDD
    $servername = 'localhost';
    $username = 'phpmyadmin';
    $password = 'phpmyadmin';
    //Conexion a la BBDD
    $conexion = new mysqli($servername, $username, $password);
    if (!$conexion) {
        die("Conexión fallida:" . $conexion->connect_error);
    } else {
        echo "Conexión exitosa";
    }
    //Selección de la BBDD
    mysqli_select_db($conexion, "biblioteca");
    //Insertar libros
    if ($Titulo) {
        $libros = "INSERT libros (titulo,autor,genero,editorial,isbn,cantidad)
                            VALUES ('$Titulo','$Autor','$Genero','$Editorial','$ISBN','$Cantidad')";
        mysqli_query($conexion, $libros);
        echo "Linea insertada en la tabla libros en la BBDD correctamente";
    }

    //Insertar usuarios
    if ($Usuario) {
        $usuarios = "INSERT usuarios (nombre,email,telefono)
                            VALUES ('$Usuario','$Email','$Telefono')";
        mysqli_query($conexion, $usuarios);
        echo "Linea insertada en la tabla usuarios en la BBDD correctamente";
    }
    //Insertar prestamos
    if ($id) {
        $prestamos = "INSERT prestamos (id_libro,id_usuario,fecha_prestamo,fecha_devolucion)
                            VALUES ('$id_libro','$id_usuario','$fechainicio','$fechafin')";
        mysqli_query($conexion, $prestamos);
        echo "Linea insertada en la tabla usuarios en la BBDD correctamente";
    }
    //Cerrar conexion con la Base de datos
    $conexion->close();

    ?>
</body>

</html>