<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 13 de la Relación 1 - FACTORIAL</title>
    <link rel="shortcut icon" href="playamar.png" type="image/x-icon">
</head>
<body>
    <h1>Ejercicio 13 de la Relación 1 - FACTORIAL</h1>

    <?php
    
        $num = -5;
        $fac = 1;

        if($num > 0)
        {
            for ($i = $num; $i > 1; $i--)
            {
                $fac *= $i;
            }

            echo "El factorial de $num es $fac";
        }
        else
        {
            echo "El factorial de $num no esta definido";
        }
        

    ?>
</body>
</html>