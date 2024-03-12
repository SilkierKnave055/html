<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Libros</title>
    <link rel="stylesheet" href="bootstrap.min.css">
</head>

<body>
        <form id="formulariopanes" name="formulariopanes" method="post">
            <div class="form-group">
                <label>ID: </label>
                <input type="text" class="form-control" id="ID" name="ID">
            </div>
            <div class="form-group">
                <label>Tipo pan: </label>
                <input type="text" class="form-control" id="tipo" name="tipo">
            </div>
            <div class="form-group">
                <label>Masa: </label>
                <input type="text" class="form-control" id="masa" name="masa">
            </div>
            <div class="form-group">
                <label>Cantidad: </label>
                <input type="text" class="form-control" id="cantidad" name="cantidad">
            </div>
            <input name="Enviar" type="submit" class="btn btn-primary btn-block" formaction="procesarformulario.php" value="Enviar">
            <input name="Borrar" type="reset" class="btn btn-primary btn-block" formaction="procesarformulario.php" value="Borrar">
        </form>

</body>

</html>