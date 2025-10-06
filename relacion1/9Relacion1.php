<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 9 de la Relación 1 - TRIANGULOS</title>
    <link rel="shortcut icon" href="../img/playamar.png" type="image/x-icon">
</head>
<body>
    
    <h1>Ejercicio 9 de la Relación 1 - TRIANGULOS</h1>

    <?php
        $lado1 = 1;
        $lado2 = 4;
        $lado3 = 6;

        if ($lado1 == $lado2 and $lado1 == $lado3)
        {
            echo "El triangulo es equilatero";
        }
        else if($lado1 == $lado2 or $lado2 == $lado3 or $lado3 == $lado1)
        {
            echo "El triangulo es isosceles";
        }
        else
        {
            echo "El triangulo es escaleno";
        }
    ?>

</body>
</html>