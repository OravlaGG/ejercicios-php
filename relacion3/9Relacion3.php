<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 9 Relación 3 - Funcion Palabra larga</title>
    <link rel="shortcut icon" href="../img/playamar.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>Ejercicio 9 Relación 3 - Funcion Palabra larga</h1>
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

            $arr = preg_split("/[\s,]+/", $texto);

            $larga = $arr[0];

            for($i = 1; $i < count($arr); $i++)
            {
                if(strlen($larga) < strlen($arr[$i]))
                {
                    $larga = $arr[$i];
                }
            }

            echo "La palabra más larga del texto es $larga";
        }

    ?>
    </div>
</body>
</html>