<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Prestamos</title>
    <link rel="stylesheet" href="bootstrap.min.css">
</head>

<body>
    <form id="formulariopedidos" name="formulariopedidos" method="post">
        <div class="form-group">
            <label>Introduce tu DNI:</label>
            <input type="text" class="form-control" name="DNI" id="DNI" />
        </div>
        <div class="form-group">
            <?php
            $servername = "localhost";
            $username = "phpmyadmin";
            $password = "phpmyadmin";
            $conexion = new mysqli($servername, $username, $password);
            if (!$conexion) {
                die("Conexión fallida:" . $conexion->connect_error);
            }

            mysqli_select_db($conexion, "panaderia");

            $consultas = "SELECT nombre FROM Pedidos,Clientes WHERE Clientes.nombre = Pedidos.nombre_cliente";

            $registros = mysqli_query($conexion, $consultas);

            echo "<label for='seleccionar'>Selecciona tu nombre: </label>";
            echo "<select class='form-control' name='seleccionar' id='seleccionar'>";
            while ($registro = mysqli_fetch_row($registros)) {
                echo "<option value='$registro[0]'>" . $registro[0] . "</option>";
            }
            echo "</select>";
            ?>
        </div>
        <div class="form-group">
            <?php
            $servername = "localhost";
            $username = "phpmyadmin";
            $password = "phpmyadmin";
            $conexion = new mysqli($servername, $username, $password);
            if (!$conexion) {
                die("Conexión fallida:" . $conexion->connect_error);
            }

            mysqli_select_db($conexion, "panaderia");

            $consultas = "SELECT tipo FROM Pedidos,Panes WHERE Panes.tipo = Pedidos.tipo_pan";

            $registros = mysqli_query($conexion, $consultas);

            echo "<label for='seleccionado'>Elige el tipo de pan: </label>";
            echo "<select  class='form-control'name='seleccionado' id='seleccionado'>";
            while ($registro = mysqli_fetch_row($registros)) {
                echo "<option value='$registro[0]'>" . $registro[0] . "</option>";
            }
            echo "</select>";
            ?>
        </div>

        <button type="submit" class="btn btn-primary" formaction="procesarformulario.php">Insertar</button>
        <button type="reset" class="btn btn-primary">Limpiar</button>
</body>

</html>