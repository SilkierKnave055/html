<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //break
    /*for ($i=1; $i<=10; $i++) {
        echo "valor de i: " , $i, "<br>";
        if ($i == 3) {
            break;
        }
    }*/
    for ($j=1; $j<=10; $j++) {
        echo "valor de j: " , $j, "<br>";
        for ($k = 1; $k <= 10; $k++) {
            echo "valor de k: ", $k, "<br>";
            if ($k == 3) {
                break;
            }
        }
    }

    ?>
</body>
</html>