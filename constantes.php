<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Constantes</title>
</head>
<body>
    <?php
    define ("SALUDO", "Hola, buenas tardes");
    echo SALUDO;
    echo "<br>";
        $x=TRUE;
        $y=FALSE;
        $z=($y OR $x);
        echo "El valor de z es: ", $z, "<br>";
        $b=7E-10;
        $decimales=number_format($b, 10);
        echo $decimales;
    ?>
</body>
</html>