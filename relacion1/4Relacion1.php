<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>4Relacion1</title>
    <link rel="shortcut icon" href="../img/playamar.png" type="image/x-icon">
</head>
<body>
    
<h1>Ejercicio 4 de la Relación 1 - ARRAY</h1>

<?php
    // para desactivar los Warning 
    // error_reporting(E_ALL & ~E_WARNING);

     const SEMANA = ["Lunes",
                    "Martes",
                    "Miercoles",
                    "Jueves",
                    "Viernes",
                    "Sabado",
                    "Domingo"];

    echo "<br>El primer dia de la semana es: ", SEMANA[0];
    echo "<br>Una semana tiene ", count(SEMANA);
    echo "<br>Los dias de la semana son:";
    echo"<ul>";
    for ($i = 0; $i < count(SEMANA); $i++)
    {
        echo "<li>",SEMANA[$i],"</li>";
    }
    echo"</ul>";
    // la funccion que calcula la long de un array es count
?>

</body>
</html>