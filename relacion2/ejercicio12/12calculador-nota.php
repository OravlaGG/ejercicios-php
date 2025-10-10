<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notas</title>

</head>
<body>
    <?php
    $nota0 = $_GET['inicial'];
    $nota1 = $_GET['primera'];
    $nota2 = $_GET['segunda'];
    $nota3 = $_GET['tercera'];
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