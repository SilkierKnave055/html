<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $i = 1;
    /*while ($i <= 10) {
        echo $i++, "<br>";
    }*/
    do {
        echo $i++, "<br>";
    } while ($i <= 10);
    $j = 0;
    echo "<br>";
    do {
        echo ++$j, "<br>";
    } while ($j <= 9);
    ?>
</body>
</html>