<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //Cogemos los datos enviados a través del formulario
    $codalum = $_POST['codalum'];
    $nombre = $_POST['nombre'];
    $direccion = $_POST['direccion'];
    $curso = $_POST['curso'];

    //Inserto los datos en BBDD
    $insert_alumno = "INSERT INTO alumnos
            (codalumno, nombre, direccion, cursoID)
            VALUES($codalum, $nombre, $direccion, $curso);";

    if ($result = mysqli_query($conector, $insert_alumno)) {
        echo "<h3 class='center'>Alumno " . $nombre . " creado correctamente." . "<br/>";
    } else {
        echo ("No ha sido posible registrar el alumno -> " . mysqli_error($conector)) . "<br>";
    }
    ?>
</body>
</html>