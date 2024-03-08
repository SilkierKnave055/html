<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch</title>
</head>
<body>
    <?php
    //Estructuras de control de flujo switch
    $dia = 3;
    switch ($dia) {
        case 1:
            echo "Lunes";
            break;
        case 2:
            echo "Martes";
            break;
        case 3:
            echo "Miércoles";
            break;
        case 4:
            echo "Jueves";
            break;
        case 5:
            echo "Viernes";
            break;
        case 6:
            echo "Sábado";
            break;
        case 7:
            echo "Domingo";
            break;
        default:
            echo "Día no valido";
            break;
    }
echo "<br>";
    $dia = "Miercoles";
    switch ($dia) {
        case "Lunes":
            echo "1";
            break;
        case "Martes":
            echo "2";
            break;
        case "Miercoles":
            echo "3";
            break;
        case "Jueves":
            echo "4";
            break;
        case "Viernes":
            echo "5";
            break;
        case "Sabado":
            echo "6";
            break;
        case "Domingo":
            echo "7";
            break;
        default:
            echo "Día no valido";
            break;
    }
    ?>
</body>
</html>