<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //recursividad
    $conteo = 0;
    $factorial = 1;
    function factorial ($n) {
        if ($n==1) {
            return 1;
        } else {
            echo $n . " x ";
            return $n * factorial ($n-1);
        }
    }

    $resultado = factorial (5);
    echo "<br>" . $resultado;
    ?>
</body>
</html>