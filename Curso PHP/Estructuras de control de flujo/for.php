<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For</title>
</head>
<body>
    <?php
    for ($i=1; $i <= 10; $i++) { 
        echo $i, "<br>";
    }
    echo "<hr>";
    for ($j=10; $j >= 1; $j--) { 
        echo $j, "<br>";
    }
    echo "<hr>";
    for ($k=0; $k <= 100; $k=$k+2) { 
        echo $k, "<br>";
    }
    echo "<hr>";
    for ($l = 0; $l <= 100; $l++) {
        if ($l%2 == 0) {
            echo $l, "<br>";
        }
    }
    echo "<hr>";
    $num = 5;
    for ($m = 1; $m <= 10; $m++) {
        echo $m . " x " . $num . "=" . $m*$num, "<br>";
    }
    echo "<hr>";
    ?>
</body>
</html>