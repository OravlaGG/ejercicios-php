<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 10 Relación 3 - Funcion Palabra Invertidas</title>
    <link rel="shortcut icon" href="../img/playamar.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>Ejercicio 10 Relación 3 - Funcion Palabras Invertidas</h1>
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

            //el preg_split separa un string segun el patron que tu le introduzcas en el 1º
            //parametro dejandote muchas posibilidades, este separa por , por cualquier 
            //espacio
            $arr = preg_split("/[\s,]+/", $texto);

            for($i = count($arr) - 1; $i >= 0; $i--)
            {
                echo "$arr[$i] ";
            }

        }

    ?>
    </div>
</body>
</html>