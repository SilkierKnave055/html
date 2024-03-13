<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de usuarios</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">-->
</head>

<body>
    <form id="formulariousuarios" name="formulariousuarios" method="post" action="procesarformulario.php">
        <div class="form-group">
            <label>Usuario:</label>
            <input type="text" class="form-control" id="Usuario" name="Usuario">
        </div>
        <div class="form-group">
            <label>Email:</label>
            <input type="text" class="form-control" id="Email" name="Email">
        </div>
        <div class="form-group">
            <label>Telefono:</label>
            <input type="text" class="form-control" id="Telefono" name="Telefono">
        </div>
        <input name="Enviar" type="submit" class="btn btn-primary btn-block" value="Enviar">
</body>
</html>