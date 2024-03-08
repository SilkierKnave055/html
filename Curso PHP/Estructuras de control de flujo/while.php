 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>while</title>
 </head>
 <body>
    <?php
    $num = 0;
    $respuesta = "Oporto";
    $intentos = 1;
    while ($num <= 10) {
      echo $num."<br>";
      $num++;
    }
    while ($respuesta != "Lisboa") {
      echo "Intento " . $intentos . "<br>";
      if ($intentos == 3) {
         $respuesta = "Lisboa";
      }
      $intentos++;
    }
    ?>
 </body>
 </html>