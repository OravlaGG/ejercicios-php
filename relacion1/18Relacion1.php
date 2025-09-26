<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 18 de la Relación 1 - ALGORITMO EUCLIDES MCD</title>
    <link rel="shortcut icon" href="playamar.png" type="image/x-icon">
</head>
<body>
    <h1>Ejercicio 18 de la Relación 1 - ALGORITMO EUCLIDES MCD</h1>
    
    <?php
    
    $num1 = 12;
    $num2 = 5;

    echo"Vamos a hayar el MCD entre $num1 y $num2";

    while($num1 != $num2)
    {
        if($num1 > $num2)
        {
            $num1 -= $num2;
        }
        else
        {
            $num2 -=$num1;
        }
    }

    echo "<br>El MCD ES $num1";
    ?>

</body>
</html>