<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 9 de la Relación 1 - TRIANGULOS</title>
    <link rel="shortcut icon" href="../img/playamar.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
<?php

        $nota = $_GET['nota'];

        echo "Nota final: es $nota";
        echo "<br><div class='progress' role='progressbar' ";
        switch($nota)
        {
            case $nota < 5:
                echo  "aria-label='Danger example' aria-valuenow='{$nota}0' aria-valuemin='{$nota}0' aria-valuemax='100'>
                    <div class='progress-bar bg-danger' ";
                break;
            case $nota < 6:
                echo "aria-label='success example' aria-valuenow='{$nota}0' aria-valuemin='{$nota}0' aria-valuemax='100'>
                    <div class='progress-bar bg-success' ";
                break;
            case $nota < 9:
                echo "aria-label='Warning example' aria-valuenow='{$nota}0' aria-valuemin='{$nota}0' aria-valuemax='100'>
                    <div class='progress-bar bg-warning' ";
                break;
            case $nota <= 10:
                echo "aria-label='info example' aria-valuenow='{$nota}0' aria-valuemin='{$nota}0' aria-valuemax='100'>
                    <div class='progress-bar bg-info' ";
                break;
            default:
                echo "Valor de Nota INVALIDO";
        }
        echo "style='width: {$nota}0%'>$nota</div></div>";
?>
</body>