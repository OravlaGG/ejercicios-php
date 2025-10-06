<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 12 de la Relación 1 - NOTAS SWITCH</title>
    <link rel="shortcut icon" href="../img/playamar.png" type="image/x-icon">
</head>
<body>
    <h1>Ejercicio 12 de la Relación 1 - NOTAS SWITCH</h1>

    <?php

        $nota = 0;
        echo "Nota final: ";
        switch($nota)
        {
            case $nota < 1:
                echo "Valor de Nota INVALIDO";
                break;
            case $nota < 5:
                echo "Suspenso";
                break;
            case $nota < 6:
                echo "Suficiente";
                break;
            case $nota < 9:
                echo "Notable";
                break;
            case $nota <= 10:
                echo "Sobresaliente";
                break;
            default:
                echo "Valor de Nota INVALIDO";
        }

    ?>
</body>
</html>