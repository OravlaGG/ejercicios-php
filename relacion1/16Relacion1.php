<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 16 de la Relación 1 - DIVISORES CON ESTILO</title>
    <link rel="shortcut icon" href="../img/playamar.png" type="image/x-icon">
</head>
<body>
    <h1>Ejercicio 16 de la Relación 1 - DIVISORES CON ESTILO</h1>

    <?php
    
        $num  = 10;
        $div = 1;

        echo "<p>Divisores de $num</p>";

        if ($num < 1)
        {
            echo "El numero no tiene divisores porque es 0 o menor";
        }
        else
        {
            while($div <= $num)
            {
                if ($num % $div == 0)
                {
                    echo "<span style='color: red;'>$div</span> ";
                }
                else
                {
                    echo "$div ";
                }
                $div++;
            }
        }
        

    ?>

</body>
</html>