<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $coches = array ("BMW", "Volvo", "Toyota", "Volkswagen");
    var_dump($coches);
    echo "<br>",$coches [2], "<br>";
    $cosas = array(
        "frutas" => array("a" => "naranja", "b" => "platano", "c" => "manzana"),
        "números" => array(1, 2, 3, 4, 5, 6),
        "hoyos" => array("primero", 5 => "segundo", "tercero")
    );
    echo $cosas ["frutas"]["a"];
    echo "<br>", $cosas ["hoyos"][6];
    ?>
</body>
</html>