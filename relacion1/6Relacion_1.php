<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 6 de la Relación 1 - DECLARACIÓN DE OBJETO</title>
</head>
<body>
    <h1>Ejercicio 6 de la Relación 1 - DECLARACIÓN DE OBJETO</h1>
    <?php
    
        class Fruit
        {
            private $name;//no hy que darle el tipo
            private $color;

            function __construct($name, $color)//construcor, se usa siempre __construct para todas las clases
            {
                $this->name = $name;
                $this->color = $color;
            }

            function set_name($name)//setter
            {
                $this->name = $name;
            }

            function set_color($color)//setter
            {
                $this->color = $color;
            }

            function get_name()//setter
            {
                return ($this->name);
            }

             function get_color()//setter
            {
                return ($this->color);
            }
        }

    ?>
</body>
</html>