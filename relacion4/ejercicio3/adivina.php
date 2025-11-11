<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="shortcut icon" href="../img/playamar.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

</head>
<body>
    <?php
        $mensaje = "Adivina el número entre 1 y 100";
        if (!isset($_SESSION['adi']))
        {
            $_SESSION['adi'] = rand(1,100);
        }
    ?>
    <?php
        if (isset($_REQUEST['enviar']))
        {
            if ($_REQUEST['num'] < $_SESSION['adi'])
            {
                $mensaje = "El número que has puesto se ha quedado corto";
            }
            elseif ($_REQUEST['num'] > $_SESSION['adi'])
            {
                $mensaje = "El número que has puesto se ha pasado";
            }
            else
            {
                $mensaje = "Enhorabuena has Ganado";
            }
        }
    ?>
    
    <div class="container-fluid w-75">
        <h1><?php echo  $mensaje?></h1>
        <form action=<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?> method="get" class="p-3 shadow rounded"
            id="form1">
            <div class="mb-3">
                <label for="num" class="form-label">Dame un Número</label>
                <input type="number" min="1" max="100" name="num" id="num" class="form-control">
                <div id="numHelp" class="form-text text-danger">El numero debe estar entre 1 y 100</div>
            </div>
        <button type="submit" class="btn btn-primary" name="enviar">Enviar</button>
        </form>
    </div>
</body>
</html>