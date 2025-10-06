<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5 de la Relación 1 - ARRAY ASOCIATIVO</title>
    <link rel="shortcut icon" href="../img/playamar.png" type="image/x-icon">
</head>
<body>

<h1>Ejercicio 5 de la Relación 1 - ARRAY ASOCIATIVO</h1>

<?php

     const SEMANA = ["Lunes",
                    "Martes",
                    "Miercoles",
                    "Jueves",
                    "Viernes",
                    "Sabado",
                    "Domingo"];

    const TEMPERATURA = array("Lunes" => "15 C",
                                "Martes" => "18 C",
                                "Miercoles" => "26 C",
                                "Jueves" => "20 C",
                                "Viernes" => "18 C",
                                "Sabado" => "19 C",
                                "Domingo" => "21 C");

    echo "<br>La temperatura del primer dia de la semana es: ", TEMPERATURA["Lunes"];                            
    echo "<br>";

    foreach (TEMPERATURA as $dia => $temp)
    {
        echo"<br> $dia : $temp";
    }
   
    echo "<ol>";
    for ($i = 0; $i < count(SEMANA); $i++)
    {
        echo "<li>La Temperatura del dia ",SEMANA[$i] ,": ",TEMPERATURA[SEMANA[$i]],"</li>";
    }
    echo "</ol>";

    echo "<table style='border:black solid 1px'>";
    echo "<tr>";
    echo "<th></th>";
    echo "<th>DIA</th>";
    echo "<th>TEMP</th>";

    echo "</tr>";
    $i = 1;
    foreach (TEMPERATURA as $dia => $temp)
    {
        echo "<tr>";
        echo "<th>$i</th>";
        echo "<th>$dia</th>";
        echo "<th>$temp</th>";
        echo "</tr>";
        $i++;
    }
    echo "</table>";
?>
    
</body>
</html>