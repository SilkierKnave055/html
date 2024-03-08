<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Ejercicio 2</title>
</head>
<body>
    <?php
    for ($num = 1; $num <= 100; $num++) {
        if ($num % 2 <> 0) {
            echo $num , "<br>";
            $suma = $num + $suma;
        }
    }
    echo "La suma total de los números es ", $suma;
    ?>
</body>
</html>