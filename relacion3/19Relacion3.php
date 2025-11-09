<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funciones MenuV2</title>
    <link rel="shortcut icon" href="../img/playamar.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <h1>Ejercicio 18 Relación 3 - Funciones MenuV2</h1>
    </div>
    <div class="d-flex  justify-content-center align-items-center">
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="get"class="p-3 shadow rounded">
    <div class="mb-3">
        <label for="cantidad" class="form-label">Introduce un numero de menus deseados</label>
        <input type="number" min="1" require name="cantidad" id="cantidad" class="form-control">
    </div>  
    <input type="submit" value="Enviar">
    </form>
    </div>
    <div class="container">
        <h3>Menu sugerido</h3>
    <?php
        if(isset($_GET['cantidad']))
        {
            $num = $_GET['cantidad'];
            $ubiImg = ['Ajo Blanco' => '../img/AjoBlanco.jpg','Gazpachuelo' => '../img/Gazpachuelo.jpg','Salmorejo' => '../img/salmorejo.jpeg'];
            $menu = ['entrante' => array('Ensalada César','Hummus','Boquerones al natural'),
                    'primero' => array('Gazpachuelo','Salmorejo','Ajo Blanco'),
                    'segundo' => array('Fritura Malagueña','Conejo al ajillo','Pisto con huevo'),
                    'postre' => array('Helado 3 sabores','Flan','Tarta de Queso')];
            
            $aleatorio = function ($n) 
            {
                $r = rand(0,4);

                if ($r > 2)
                {
                    $r = 2;
                }

                return $n[$r];
            };

            for($i = 0; $i < $num; $i++)
            {
                $sugerencia = array_map($aleatorio,$menu);
                echo "<div class='card' style='width: 18rem;'>
                        <div class='card-header'>
                            Menu nº". ($i+1) ."
                        </div>
                        <img src='". $ubiImg[$sugerencia['primero']] ."' class='card-img-top'>
                        <ul class='list-group list-group-flush'>
                            <li class='list-group-item'>Entrante: ". $sugerencia['entrante'] ."</li>
                            <li class='list-group-item'>Primer plato <b>". $sugerencia['primero'] ."</b></li>
                            <li class='list-group-item'>Segundo plato ". $sugerencia['segundo'] ."</li>
                            <li class='list-group-item'>Postre ". $sugerencia['postre'] ."</li>

                        </ul>
                        </div><br>";
            }
        }
    ?>
    </div>
</body>
</html>