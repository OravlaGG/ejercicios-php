<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 7 de la Relación 1 - NOTA FINAL</title>
    <link rel="shortcut icon" href="../img/playamar.png" type="image/x-icon">
</head>
<body>
<h1>Ejercicio 7 de la Relación 1 - NOTA FINAL</h1>    

<?php

    $nota1 = 8;
    $nota2 = 6;
    $media = 0.0;
    $faltas = 10;

    $media = (($nota1 + $nota2)/2) - (0.25 * $faltas);

    echo"La nota final es $media<br>";

    if ($media < 5)
    {
        echo "Has suspendido";
    }
    else
    {
        echo "Has aprobado";
    }
?>

</body>
</html>