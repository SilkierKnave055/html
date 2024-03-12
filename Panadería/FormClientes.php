<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario para Clientes</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">-->
</head>
<body>
    <!--Creamos formulario-->
<form id="formularioclientes" name="formularioclientes" method="post">
    <div class="form-group">
    <label>DNI:</label>
    <input type="text" class="form-control" id="DNI" name="DNI">
    </div>
    <div class="form-group">
    <label>Nombre:</label>
    <input type="text" class="form-control" id="nombre" name="nombre">
    </div>
    <div class="form-group">
    <label>Telefono:</label>
    <input type="number" class="form-control" id="telefono" name="telefono">
    </div>
    <input name="Enviar" type="submit" class="btn btn-primary btn-block" formaction="procesarformulario.php" value="Enviar"> 
</form>
</body>
</html>