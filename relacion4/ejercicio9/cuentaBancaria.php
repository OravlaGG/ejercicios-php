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
            protected string  $numCuenta;
            protected string  $titular;
            protected float   $saldo;
            protected int     $numOperaciones;

            public function __construct(string $numCuenta,string $titular)
            {
                $this->numCuenta = $numCuenta;
                $this->titular = $titular;
                $this->saldo = 0;
                $this->numOperaciones = 0;
            }

            public function __destruct()
            {
                echo "Cuenta Bancaria $this->numCuenta eliminado";
            }

            public function getSaldo(): float
            {
                return $this->saldo;
            }

            public function toString(): string
            {
                return ("Numero Cuenta: $this->numCuenta, Titular: $this->titular, Saldo: $this->saldo, Num. Operaciones: $this->numOperaciones");
            }

            public function depositarDinero(float $cantidad)
            {
                if($cantidad > 0)
                {
                    $this->saldo += $cantidad;
                    $this->numOperaciones++;
                }
                
            }

            public function extraerDinero(float $cantidad)
            {
                if($cantidad > 0)
                {
                    $this->saldo -= $cantidad;
                    $this->numOperaciones++;
                }
                
            }

            public function transferencia(CuentaBancaria $cuenta, float $cantidad)
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
            public function extraerDinero(float $cantidad)
            {
                if($this->getSaldo() - $cantidad >= 0)
                {
                    $this->extraerDinero($cantidad);
                }
            }

            #[Override]
            public function transferencia(CuentaBancaria $cuenta, float $cantidad)
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

            public function __construct(string $numCuenta, string $titular,float $credito = 0)
            {
                parent::__construct($numCuenta, $titular);

                $this->credito = $credito;
            }

            #[Override]
            public function extraerDinero(float $cantidad)
            {
                if($this->getSaldo() - $cantidad >= $this->credito)
                {
                    $this->extraerDinero($cantidad);
                }
            }

            #[Override]
            public function transferencia(CuentaBancaria $cuenta, float $cantidad)
            {
                if($this->getSaldo() - $cantidad >= $this->credito)
                {
                    parent::transferencia($cuenta, $cantidad);
                }
            }
        }

        $credit = new CuentaCredito("00000000","Álvaro Gomez");
        $credit2 = new CuentaCredito("00000001","Ana");

        echo $credit->toString();
        echo $credit2->toString();

        $credit->depositarDinero(1000.00);
        
        echo $credit->toString();
        $credit->transferencia($credit2,200);

        echo $credit->toString();
        echo $credit2->toString();


    ?>
</body>
</html>