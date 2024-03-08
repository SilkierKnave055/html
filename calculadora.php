<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
    <H1>Calculadora con constantes</H1>
    <?php
    //const puede definir una variable
    const A = 6;
    //define es otra forma de definir variables
    define ("B", 0);
    //Esta es una sentencia con . que se anida y se ejecuta completamente
    echo "El valor de la suma es: ". A+B. "<br>";
    //Esta es una sentencia con , y se ejecuta por partes
    echo "El valor de la resta es: ", A-B, "<br>";
    echo "El valor de la multiplicación es: ", A*B, "<br>";
    echo "El valor de la división es: ", A/B, "<br>";
    ?>
</body>
</html>