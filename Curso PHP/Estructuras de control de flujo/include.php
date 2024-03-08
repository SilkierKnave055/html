<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //incluye un fichero dentro de otro
    echo "Soy el primer fichero" , "<br>";
    //include: Lo incluye tantas veces como sea escrito
    include "include2.php";
    echo "<br>";
    //include_once: Si el fichero ya ha sido añadido, no lo incluye más.
    include_once "include2.php";
    ?>
</body>
</html>