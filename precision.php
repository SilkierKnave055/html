<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $a = 1.23456789;
    $b = 1.23456780;
    $c = ($a-$b);
    echo ($a-$b), "<br>";
    $epsilon = 0.00001;
    if(abs($a-$b) < $epsilon) {
        echo "true";
    }
    $decimales=number_format($c, 20);
        echo "<br>", $decimales;
    ?>
</body>
</html>