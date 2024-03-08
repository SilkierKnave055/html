<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    /*Operadores lógicos*/
    $num1 = 5;
    $num2 = 10;
    $num3 = 5;
    $activo1 = true;
    $activo2 = false;

    //AND: Devuelve TRUE cuando ambos son verdad.
    if ($num1 == 5 and $num1 == $num3) {
        echo "Dentro del if", "<br>";
    }
    //OR: Cuando alguno de los dos es verdadero, devuelve TRUE, si los dos son verdad también devuelve TRUE.
    if ($num1 == 5 or $num1 == $num2) {
        echo "Dentro del segundo if", "<br>";
    }
    //XOR: Sólo es TRUE cuando una de las dos es verdad, si son los dos es FALSE
    if ($num1 == 5 xor $num1 == $num2) {
        echo "Dentro del tercer if", "<br>";
    }
    //NOT: Es para negar, si algo es falso y le pongo not, se convierte en verdadero.
    if (!$activo2) {
        echo "Dentro del cuarto if", "<br>";
    }
    //
    // ||: OR


    ?>
</body>
</html>