<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        abstract class CuentaBancaria  
        {
            private string  $numCuenta;
            private string  $titular;
            private float   $saldo;
            private int     $numOperaciones;

            public function __construct($numCuenta,$titular,$saldo = 0, $numOperaciones = 0)
            {
                $this->numCuenta = $numCuenta;
                $this->titular = $titular;
            }

            public function __destruct()
            {
                echo "Cuenta Bancaria $this->numCuenta eliminado";
            }

            public function getSaldo()
            {
                return $this->saldo;
            }

            public function toString()
            {
                return ("Numero Cuenta: $this->numCuenta, Titular: $this->titular");
            }

            public function depositarDinero($cantidad)
            {
                if($cantidad > 0)
                {
                    $this->saldo += $cantidad;
                    $this->numOperaciones++;
                }
                
            }

            public function extraerDinero($cantidad)
            {
                if($cantidad > 0)
                {
                    $this->saldo -= $cantidad;
                    $this->numOperaciones++;
                }
                
            }

            public function transferencia(CuentaBancaria $cuenta, $cantidad)
            {
                if($cantidad > 0)
                {
                    $cuenta->saldo += $cantidad;
                    $this->saldo -= $cantidad;
                    $this->numOperaciones++;
                    $cuenta->numOperaciones++;
                }
            }
        }

        class CuentaDebito extends CuentaBancaria
        {
            #[Override]
            public function extraerDinero($cantidad)
            {
                if($this->getSaldo() - $cantidad >= 0)
                {
                    $this->extraerDinero($cantidad);
                }
            }

            #[Override]
            public function transferencia(CuentaBancaria $cuenta, $cantidad)
            {
                if($this->getSaldo() - $cantidad >= 0)
                {
                    $this->transferencia($cuenta, $cantidad);
                }
            }
        }

        class CuentaCredito extends CuentaBancaria
        {
            private float $credito;

            public function __construct($numCuenta, $titular, $credito,$saldo = 0, $numOperaciones = 0)
            {
                parent::__construct($numCuenta, $titular);

                $this->credito = $credito;
            }

            #[Override]
            public function extraerDinero($cantidad)
            {
                if($this->getSaldo() - $cantidad >= $this->credito)
                {
                    $this->extraerDinero($cantidad);
                }
            }

            #[Override]
            public function transferencia(CuentaBancaria $cuenta, $cantidad)
            {
                if($this->getSaldo() - $cantidad >= $this->credito)
                {
                    $this->transferencia($cuenta, $cantidad);
                }
            }
        }


    ?>
</body>
</html>