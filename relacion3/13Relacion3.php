<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 13 Relación 3 - Funcion de los String</title>
    <link rel="shortcut icon" href="../img/playamar.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>Ejercicio 13 Relación 3 - Funcion de los String</h1>
    </div>
    <div class="d-flex  justify-content-center align-items-center">
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="get"class="p-3 shadow rounded">
    <div class="mb-3">
        <label for="texto" class="form-label">Introduce un texto</label>
        <input type="text" require name="texto" id="texto" class="form-control">
    </div>  
    <input type="submit" value="Enviar">
    </form>
    <div class="justify-content-center align-items-center">
    <?php

        if (isset($_GET['texto']))
        {
            $texto = $_GET['texto'];

            $tmp = strrev($texto);

            echo"<div class='alert alert-primary' role='alert'>";
            echo "El texto al reves es $tmp. Es palindromo? ";
            if ($tmp == $texto)
            {
                echo "Si";
            }
            else
            {
                 echo "No";
            }
            echo"</div>";

            $tmp = strtoupper($texto);
            echo"<div class='alert alert-secondary' role='alert'>";
            echo "El texto en mayusculas es $tmp y en minusculas es ";
            $tmp = strtolower($texto);
            echo"$tmp</div>";

            echo"<div class='alert alert-danger' role='alert'>";
            $tmp = strlen($texto);
            echo "La longitud del texto es de  $tmp y la cantidad de palabras es ";
            $tmp = str_word_count($texto,0);
            echo"$tmp</div>";

            echo"<div class='alert alert-warning' role='alert'>";
            //$tmp = crypt($texto);
            echo "Aplicar crypt ";
            $tmp = str_word_count($texto,0);
            echo"$tmp</div>";
        }

    ?>
    </div>
</body>
</html>