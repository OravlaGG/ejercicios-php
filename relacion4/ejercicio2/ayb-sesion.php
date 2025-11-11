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
    <div class="container-fluid w-75">
        <?php
            if (!isset($_SESSION['a']))
            {
                $_SESSION['a'] = 0;
                $_SESSION['b'] = 0;
            }
        ?>
        <?php
            if (isset($_REQUEST['enviar']))
            {
                switch($_REQUEST['operacion'])
                {
                    case "+a":
                        $_SESSION['a']++;
                        break;
                    case "-a":
                        $_SESSION['a']--;
                        break;
                    case "+b":
                        $_SESSION['b']++;
                        break;
                    case "-b":
                        $_SESSION['b']--;
                        break;
                    case "ra":
                        $_SESSION['a'] = 0;
                        break;
                    case "rb":
                        $_SESSION['b'] = 0;
                        break;
                    case "ds":
                        unset($_SESSION['a']);
                        unset($_SESSION['b']);
                        session_destroy();
                        break;
                }
            }
        ?>
        <?php
            if (!isset($_SESSION['a']))
            {
                $_SESSION['a'] = 0;
                $_SESSION['b'] = 0;
            }
        ?>
        
        <h1>A: <?php echo $_SESSION['a'];?></h1>
        <h1>B: <?php echo $_SESSION['b'];?></h1>
        <form action=<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?> method="get" class="p-3 shadow rounded"
            id="form1">
                <div class="mb-3">
                    <select name="operacion" id="operacion">
                        <option value="+a">Incrementar A</option>
                        <option value="-a">Decrementar A</option>
                        <option value="+b">Incrementar B</option>
                        <option value="-b">Decrementar B</option>
                        <option value="ra">Reseat A</option>
                        <option value="rb">Resetear B</option>
                        <option value="ds">Destruir Sesion</option>

                    </select>
                </div>
                <button type="submit" class="btn btn-primary" name="enviar">Enviar</button>
        </form>
    </div>
</body>
</html>