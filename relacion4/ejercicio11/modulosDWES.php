<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>stdClass</title>
</head>
<body>
    <?php
        $modulosDWES = new stdClass();
        $modulosDWES->modulo = "Desarrollo Web en Entorno Servidor";
        $modulosDWES->acronimo = "DWES";
        $modulosDWES->curso = 2;
        $modulosDWES->descripcion = "Un curso sobre el desarrollo web y derivados...";
        $modulosDWES->teacher = "Pilar";

        var_dump($modulosDWES);
        echo "<br><br>";
        var_dump((array)$modulosDWES);
        echo "<br><br>";
        var_dump((object)$modulosDWES);
    ?>
</body>
</html>