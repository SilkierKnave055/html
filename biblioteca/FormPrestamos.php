<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de prestamos</title>
    <link rel="stylesheet" href="bootstrap.min.css">
</head>
<body>
    <form id="formularioprestamos" name="formularioprestamos" method="post" action="procesarformulario.php">   
    <div class="form-group">
        <?php
            $servername= "localhost";
            $username= "phpmyadmin";
            $password= "phpmyadmin";
                $conexion = new mysqli($servername,$username,$password);
                if( !$conexion ) {  
                    die("Conexión fallida:". $conexion->connect_error);
                }

                mysqli_select_db($conexion,"biblioteca");

                $consultas= "SELECT nombre FROM prestamos,usuarios WHERE usuarios.id = prestamos.id_usuario";

                $registros = mysqli_query($conexion,$consultas);

                echo "<label for='seleccionar'>Elige un nombre: </label>";
                echo "<select class='form-control' name='seleccionar' id='seleccionar'>";
                while($registro=mysqli_fetch_row($registros)) {
                        echo "<option value='$registro[0]'>".$registro[0]."</option>";
                }
                echo "</select>";
        ?>  
</div>
<div class="form-group">
        <?php
            $servername= "localhost";
            $username= "phpmyadmin";
            $password= "phpmyadmin";
                $conexion = new mysqli($servername,$username,$password);
                if( !$conexion ) {  
                    die("Conexión fallida:". $conexion->connect_error);
                }

                mysqli_select_db($conexion,"biblioteca");

                $consultas= "SELECT titulo FROM prestamos,libros WHERE libros.id = prestamos.id_libro";

                $registros = mysqli_query($conexion,$consultas);

                echo "<label for='seleccionado'>Elige un libro: </label>";
                echo "<select  class='form-control'name='seleccionado' id='seleccionado'>";
                while($registro=mysqli_fetch_row($registros)) {
                        echo "<option value='$registro[0]'>".$registro[0]."</option>";
                }
                echo "</select>";
        ?>  
</div>
    <div class="form-group">
        <label>Establece fecha de inicio:</label>
        <input type ="date" class="form-control" id="fechainicio" />
    </div>
    <div class="form-group">
        <label>Establece fecha de finalización del préstamo:</label>
        <input type ="date" class="form-control" id="fechafin" />
</div>
        <button type="submit" class="btn btn-primary">Insertar</button>
        <button type ="reset" class="btn btn-primary">Limpiar</button>
</body>
</html>