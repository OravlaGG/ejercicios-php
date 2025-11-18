<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
    
        interface Encendible
        {
            public function encender();

            public function apagar();
        }

        class Bombilla implements Encendible
        {
            private string  $tipoBombilla;
            private int     $lumenes;
            private bool    $encendida;

            public function __construct($tipoBombilla,$lumenes,$encendida = false)
            {
                $this->tipoBombilla = $tipoBombilla;
                $this->lumenes = $lumenes;
            }

            public function __destruct()
            {
                echo "Esta  bombilla $this->tipoBombilla eliminado";
            }

            public function encender()
            {
                $this->encendida = true;

                return "La bombilla esta encendida";
            }

            public function apagar()
            {
                $this->encendida = false;

                return "La bombilla esta apagada";
            }

        }

        class Motocicleta implements Encendible
        {
            private int     $gasolina;
            private int     $bateria;
            private string  $matricula;
            private bool    $estado;

            public function __construct($matricula, $gasolina = 0, $bateria = 2, $estado = false)
            {
                $this->matricula = $matricula;
            }

            public function cargarGasolina($cantidad)
            {
                if ($cantidad > 0)
                {
                    $this->gasolina += $cantidad;
                }
            }

            public function encender()
            {
                $mensaje = "";

                if ($this->estado)
                {
                    $mensaje = "La moto ya esta arrancada";
                }
                else
                {
                    if (($this->gasolina > 0) && ($this->bateria > 0))
                    {
                        $this->estado = true;
                        $mensaje = "He conseguido arrancar la moto";
                    }
                    else
                    {
                        $mensaje = "La moto no se ha podido arrancar";
                    }
                }

                return $mensaje;
            }

            public function apagar()
            {
                $mensaje = "";

                if ($this->estado)
                {
                    $this->estado = false;
                    $mensaje = "La moto se ha apagado correctamente";
                }
                else
                {
                    $mensaje = "La moto no esta arrancada";
                }

                return $mensaje;
            }
        }

        function enciende_algo (Encendible $algo) {
            $algo->encender();
            }
            $miBombilla = new Bombilla("led",12);
            $miMoto = new Motocicleta("3873 NXB");
            enciende_algo($miBombilla);
            enciende_algo($miMoto);

    ?>

</body>
</html>