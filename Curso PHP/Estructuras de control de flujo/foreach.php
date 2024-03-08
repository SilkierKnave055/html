<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //Estructura de control de flujo foreach
    $array1 = array(1,2,3,4);
    $valores = array("uno" => 1, "dos" => 2, "tres" => 3);

    foreach ($array1 as $valor) {
        echo $valor, "<br>";
    }
    foreach ($valores as $key => $value) {
        echo "valores [$key] => $value" . "<br>";
    }
    ?>
</body>
</html>