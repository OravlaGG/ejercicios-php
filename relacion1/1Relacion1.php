<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relacion 1 - Hola Mundo</title> 
    <link rel="shortcut icon" href="playamar.png" type="image/x-icon">
</head>
<body>
    
    <h1>Hola Mundo en php</h1>
    <h3 style='color:red'>
    <?php 
        $nombre = "Álvaro"; // Las variabes empiezan por $ y no son fuertemente tipadas
        echo "Hola $nombre"; //Una variable entre comillas dobles es sustituida por su valor
        echo '<br>Hola Mundo';  //Se puede usar coomillas simples
        echo '<br>Hola ', $nombre; //La variable conn $ no se interpreta entre ' y '
        echo "<br> Hola ", strtoupper($nombre);
       /*echo phpversion();
        echo phpinfo();
        */
        echo "<br>",date("H:i:s d M y");
        /*Esteo
         es un comentario multilinea*/
    ?>
    </h3>
</body>
</html>