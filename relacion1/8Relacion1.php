<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 8 de la Relación 1 - NOTA CON RUBRICA</title>
    <link rel="shortcut icon" href="playamar.png" type="image/x-icon">
</head>
<body>
    <h1>Ejercicio 8 de la Relación 1 - NOTA CON RUBRICA</h1>

    <?php
        $rubrica = ["Inicial" => 0.2,
                    "Primera" => 0.3,
                    "Segunda" => 0.2,
                    "Tercera" => 0.3];

        $calificaciones = ["Inicial" => 8,
                            "Primera" => 5,
                            "Segunda" => 9,
                            "Tercera" => 6]; 
    
        $notaFinal = 0.0;

        foreach ($rubrica as $prueba => $peso)
        {
            $notaFinal += $peso * $calificaciones[$prueba];
        }

        echo "<br>La nota final del alumno es de $notaFinal";

        if ($notaFinal < 5)
        {
            echo "<br>Has suspendido";
        }
        else
        {
            echo "<br>Has aprobado";
        }
    ?>
</body>
</html>