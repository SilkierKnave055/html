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
    define ("A", 6);
    define ("B", 3);
    echo "El valor de la suma es: ". A+B. "<br>";
    echo "El valor de la resta es: ", A-B, "<br>";
    echo "El valor de la multiplicación es: ", A*B, "<br>";
    if (B == 0) {
        echo "No se puede dividir entre 0";
    } else {
        echo "La división es ", (A/B);
    }
    ?>
</body>
</html>