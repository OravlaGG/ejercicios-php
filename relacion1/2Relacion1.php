<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2Relacion1</title>
    <link rel="shortcut icon" href="playamar.png" type="image/x-icon">
</head>
<body>
    <h1>Ejercicio 2 de la Relación 1 - VARIABLES Y MOSTRARLAS</h1>


    <p>

    <?php
        $booleano = true;
        $inte = 24;
        $flotante = 4.13;
        $cadena = "Mr.Crowley";

        echo "<br>", var_dump($booleano);
        echo "<br>", var_dump($inte);
        echo "<br>", var_dump($flotante);
        echo "<br>", var_dump($cadena);

        echo"<br>";
        printf("La variable booleana contiene %b, la integral contiene %d, la flotante contiene %f, y el string contiene %s", $booleano, $inte, $flotante, $cadena)
    ?>

    </p>
</body>
</html>