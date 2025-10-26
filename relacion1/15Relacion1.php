<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 15 de la Relación 1 - PRIMOS</title>
    <link rel="shortcut icon" href="../img/playamar.png" type="image/x-icon">
</head>
<body>
    <h1>Ejercicio 15 de la Relación 1 - PRIMOS</h1>

    <?php
    
        $num  = 47;
        $div = 2;
        $esPrim = true;

        while($div < $num && $esPrim != false)
        {
            if ($num % $div == 0)
            {
                $esPrim = false;
            }

            $div++;
        }

        printf("El numero %d es primo? %s",$num, ($esPrim ? 'True' : 'False'));

    ?>

</body>
</html>