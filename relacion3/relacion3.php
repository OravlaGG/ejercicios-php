<?php

function factorial($num)
        {
            if ($num == 1)
            {
                return 1;
            }
            else
            {
                return $num * factorial($num-1);
            }
            
        }

function mcd($num1, $num2)
        {
            if ($num1 == $num2)
            {
                return $num1;
            }
            else
            {
                if ($num1 > $num2)
                {
                    return mcd($num1-$num2, $num2);
                }
                else
                {
                    return mcd($num1, $num2-$num1);
                }
            }
            
        }
function esPrimo($num)
        {
            $prim = true;
            $div = 2;

            while($div < $num && $prim != false)
            {
                if ($num % $div == 0)
                {
                    $prim = false;
                }
                $div++;
            }
            return $prim;
        }
?>