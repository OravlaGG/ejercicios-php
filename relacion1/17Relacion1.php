<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 17 de la Relación 1 - ALGORITMO EUCLIDES DIVISION</title>
    <link rel="shortcut icon" href="playamar.png" type="image/x-icon">
</head>
<body>
    <h1>Ejercicio 17 de la Relación 1 - ALGORITMO EUCLIDES DIVISION</h1>

    <?php

        $dividendo = 20;
        $divisor = 6;
        $cociente = 0;
        while ($dividendo >= $divisor)
        {
            $dividendo -= $divisor;
            $cociente++;
        }

        echo "El cociente es: $cociente y el resto $dividendo ";
    ?>

</body>
</html>