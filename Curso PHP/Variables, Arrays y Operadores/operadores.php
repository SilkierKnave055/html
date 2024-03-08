<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores</title>
</head>
<body>
    <?php
    $num1 = 5;
    $num2 = 2;
    //Suma con operador aritmético
    $total = $num1 + $num2;
    echo $total, "<br>";
    //El módulo sirve para obtener el resto.
    $resultado = $num2 % $num1;
    echo $resultado, "<br>";
    //El doble asterisco sirve para elevar un número sobre otro.
    $potencia = $num1 ** $num2;
    echo $num1, " elevado a ", $num2, " es igual a: ", $potencia, "<br>";
    ?>
</body>
</html>