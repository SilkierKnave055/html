<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //Cuando llega a continue, se salta ese paso, pero sigue con el resto del bucle
    for ($i=1; $i<=10; $i++) {
        if ($i == 3) {
            continue;
        }
        echo "Valor de i: " , $i, "<br>";
    }
    ?>
</body>
</html>