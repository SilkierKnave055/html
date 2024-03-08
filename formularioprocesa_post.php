<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $marca = $_POST['marca'];
    $modelo = $_POST['modelo'];
    echo "Tu marca favorita de coches es: " . $marca. "<br>";
    echo "Tu modelo favorito de $marca es: " . $modelo. "<br>";
    ?>
</body>
</html>