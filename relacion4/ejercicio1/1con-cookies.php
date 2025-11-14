<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Probando Cookies y variables de sesión</title>
    <link rel="shortcut icon" href="playamar.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

</head>
<body>
    <div class="container-fluid w75">
        <?php
        function compruebaAcceso($id,$pass)
        {
            define("USUARIO_CORRECTO","Ali Baba");
            define("PASS_CORRECTO","Abrete sesamo");
            return ($id == USUARIO_CORRECTO && $pass == PASS_CORRECTO);
        }

        $idusuario = $_POST['idusuario'];
        $contrasena = $_POST['contrasena'];
        

        if (compruebaAcceso($idusuario,$contrasena))
        {
            setcookie("usuario",$idusuario);
            if (isset($_COOKIE['usuario']))
            {
                echo "Te llamas ". $_COOKIE['usuario'];
            }
            header("Rfresh:0");
            $_SESSION['usuario'] = $idusuario;

            echo "<br>Tu eres ". $_SESSION['usuario'] ." según el vble de sesión";
        }
        else
        {
            $_SESSION['errorLogin'] = true;
            header("Location: login.php");
            unset($_SESSION['errorLogin']);
        }
        ?>
    </div>
</body>
</html>