<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 10 de la Relación 1 - EQUACION 2º GRADO</title>
    <link rel="shortcut icon" href="../img/playamar.png" type="image/x-icon">
</head>
<body>
    <h1>Ejercicio 10 de la Relación 1 - EQUACION 2º GRADO</h1>

    <?php
    /*
    Hay q considerar q todos en algun punto sea 0
    */
        $a = 3;
        $b = -5;
        $c = 2;

        $raiz = ($b ** 2) - (4 * $a * $c);

        if($raiz > 0 and $a != 0)
        {
            printf("El resultado positivo es %.02f y el negativo es %.02f",((- $b + sqrt($raiz)) / (2 * $a)),((- $b - sqrt($raiz)) / (2 * $a)));
        }
        elseif ($a == 0)
        {
           echo "a no existe por lo cual no es una equacion de 2º grado"; 
        }
        else
        {
            echo "Las raices no son reales";
        }
    ?>
</body>
</html>