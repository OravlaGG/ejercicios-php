<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../../img/playamar.png" type="image/x-icon">
    <title>Notas</title>

</head>
<body>
    <?php
    $nota0 = $_GET['nota0'];
    $nota1 = $_GET['nota1'];
    $nota2 = $_GET['nota2'];
    $nota3 = $_GET['nota3'];
    $nombre = $_GET['nombre'];
    $mail = $_GET['mail'];
    
    $media = (($nota0 + $nota3 + $nota1 + $nota2)/4);

    echo"La nota final es $media<br>";

    if ($media < 5)
    {
        echo "Has suspendido";
    }
    else
    {
        echo "Has aprobado";
    }
    echo " 
    
    $nombre con email $mail";
?>

</body>
</html>