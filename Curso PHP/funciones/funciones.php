<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //funciones
    $numero1 = 5;
    $numero2 = 10;

    function sumar () {
        echo "Soy una función para sumar" . "<br>";
    }
    sumar();
/*  Tenemos como parámetros num1 y num2, los cuales no han sido definidos, pero al final 
    en la funcion sumar numeros, estamos diciendo que numero1 es num1 y 1 es num2, entonces 
    me suma los dos valores y me devuelve 6 */
    function sumarnumeros ($num1, $num2) {
        echo $num1 + $num2 . "<br>";
    }
    sumarnumeros ($numero1, 1);

    function sumarnumeroretorno ($num1, $num2) {
        return $num1 + $num2;
    }
    $resultado = sumarnumeroretorno($numero1, $numero2);
    echo $resultado;
    ?>
</body>
</html>