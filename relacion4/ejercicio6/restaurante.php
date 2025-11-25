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
            private static int  $numRest = 0;

            private string   $nombre;
            private string   $tipoCocina;
            private array    $ratings;

            public function __construct(string $nombre,string $tipoCocina,array $ratings=[])
            {
                $this -> nombre = $nombre;
                $this -> tipoCocina = $tipoCocina;

                Restaurante::$numRest++;
            }

            public function __destruct()
            {
                echo "Restaurante $this->nombre eliminado";
            }

            public function getNombre(): string
            {
                return $this->nombre;
            }

            public function getTCocina(): string
            {
                return $this->tipoCocina;
            }

            public function getRating(): array
            {
                return $this->ratings;
            }

            public static function getNumRest(): int
            {
                return Restaurante::$numRest;
            }

            public function setNombre(string $nombre)
            {
                $this->nombre = $nombre;
            }

            public function setTCocina(string $cocina)
            {
                $this->tipoCocina = $cocina;
            }

            public function setRatings(array $ratings)
            {
                $this->ratings = $ratings;
            }

            public function toString(): string
            {
                return ("Nombre: $this->nombre Tipo de cocina: $this->tipoCocina");
            }

            public function numRatings(): int
            {
                return count($this->ratings);
            }

            public function addRating(float $rate)
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