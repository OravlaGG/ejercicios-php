<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        class Restaurante
        {
            public string   $nombre;
            public string   $tipoCocina;
            public array    $ratings;

            public function __construct(string $nombre,string $tipoCocina, array $ratings=[])
            {
                $this -> nombre = $nombre;
                $this -> tipoCocina = $tipoCocina;
            }

            public function __destruct()
            {
                echo "Restaurante $this->nombre eliminado";
            }

            public function toString(): string
            {
                return ("Nombre: $this->nombre Tipo de cocina: $this->tipoCocina");
            }

            public function numRatings(): int
            {
                return count($this->ratings);
            }

            public function addRating(int $rate)
            {
                array_push($this->ratings,$rate);
            }

            public function addMulRatings(array $rates)
            {
                array_merge($this->ratings,$rates);
            }

            public function mediaRatings(): float
            {
                $media = 0;
                $cant = count($this->ratings);

                for ($i = 0; $i < $cant; $i++)
                {
                    $media += $this->ratings[$i];
                }

                return ($media/$cant);
            }
        }

        $miRestaurante = new Restaurante("Tasty Kebab","Carne y Vegetariana");
        var_dump($miRestaurante);
    ?>
</body>
</html>