<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de libros</title>
    <link rel="stylesheet" href="bootstrap.min.css">
</head>

<body>
    <form id="formulariolibros" name="formulariolibros" method="post" action="procesarformulario.php">
         <div class="form-group">
            <label>Titulo:</label>
             <input type="text" class="form-control" name="Titulo">
        </div>
        <div class="form-group">
            <label>Autor:</label>
            <input type="text" class="form-control" name="Autor">
        </div>
         <div class="form-group">
            <label>Genero:</label>
            <input type="text" class="form-control" name="Genero">
        </div>
        <div class="form-group">
            <label>Editorial:</label>
            <input type="text" class="form-control" name="Editorial">
        </div>
           <div class="form-group">
            <label>ISBN:</label>
            <input type="text" class="form-control" name="ISBN">
        </div>
        <div class="form-group">
            <label>Cantidad:</label>
            <input type="text" class="form-control" name="Cantidad">
        </div>
        <input name="Enviar" type="submit" class=" btn btn-primary btn-block" value="Enviar">
    </form>
</body>
</html>