<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //Función getdate

    $hoy = getdate ();
    var_dump ($hoy);

    if ($hoy ["month"] == "May") {
        echo "Mayo";
    }
    ?>
</body>
</html>