<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="../../img/playamar.png" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notas</title>

</head>
<body>
    <?php
    $nota1 = $_GET['nota1'];
    $nota2 = $_GET['nota2'];
    $faltas = $_GET['faltas'];
    
    $media = (($nota1 + $nota2)/2) - (0.25 * $faltas);

    echo"La nota final es $media<br>";

    if ($media < 5)
    {
        echo "Has suspendido";
    }
    else
    {
        echo "Has aprobado";
    }
?>

</body>
</html>