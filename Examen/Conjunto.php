<?php

class Conjunto
{
    private array   $set;
    private int     $maxItems;
    private int     $items;

    public function __construct(int $maxItems)
    {
        if ($maxItems > 1)
        {
            $this->set = [];
            $this->items = 0;
            $this->maxItems = $maxItems;
        }
        
    }

    public function __destruct()
    {
        echo "Conjunto eliminado";
    }

    public function pasarAString(): string
    {
        
        $cadena = "{" .implode(", ",$this->set). "}"; //Uso el implode para sacar todo el
                                                      //array como una cadena separada por ", "
        /*Antigua version para crear la cadena
        for ($i = 0; $i < count($this->set); $i++)
        {
            $cadena += "$this->set[$i]";
            if (!($i + 1 == count($this->set)))
            {
                $cadena += ", ";
            }
        }*/

        return $cadena;
    }

    public function incluido(int $elemento): bool
    {
        $flag = false;
        $i = 0;
        if ($this->items != 0)//Si hay 0 elementos directamente digo que no existe
        {
            while($i < count($this->set) && !$flag)
            {
                if ($elemento == $this->set[$i])
                {
                    $flag = true;
                }
                $i++;
            }
        }
        return $flag;
    }
    /*Metodo para comprobar que todo iba bien
    public function getItems()
    {
        return $this->items;
    }
    */
    public function incluir(int $elemento)
    {
        if(!$this->incluido($elemento)) 
        {
            if ($this->items != 0)
            {
                if ($this->maxItems >= count($this->set))
                {
                    array_push($this->set,$elemento);
                    $this->items++;
                }
            }
            else
            {
                array_push($this->set,$elemento);
                $this->items++;
            }
            
        }
    }

    public function interseccion(Conjunto $otroCon): Conjunto
    {   
        $arr_tmp = array_intersect($this->set,$otroCon->set);

        $inter = new Conjunto(count($arr_tmp));

        $inter->set = $arr_tmp;
        $inter->items = count($arr_tmp);

        return $inter;
    }

    public function union(Conjunto $otroCon): Conjunto
    {   
        //El unique quita las repeticiones de valores
        $tmp = array_unique(array_merge($this->set, $otroCon->set));

        $uni = new Conjunto(count($tmp));

        $uni->set = $tmp;
        $uni->items = count($uni->set);

        return $uni;
    }

    public function diferencia(Conjunto $otroCon): Conjunto
    {
        $tmp = [];
        $numExis = false;

        //Para introducir el primer conjunto que no aparece
        for ($i = 0; $i < count($this->set); $i++)
        {
            $numExis = false;
            for ($ii = 0; $ii < count($otroCon->set); $ii++)
            {
                if ($this->set[$i] == $otroCon->set[$ii])
                {
                    $numExis = true;
                }
            }
            if(!$numExis)
            {
                array_push($tmp,$this->set[$i]);
            }
        }

         //Para introducir el segundo conjunto que no aparece
        for($i = 0; $i < count($otroCon->set); $i++)
        {
            $numExis = false;
            for ($ii = 0; $ii < count($this->set); $ii++)
            {
                if ($otroCon->set[$i] == $this->set[$ii])
                {
                    $numExis = true;
                }
            }
            if(!$numExis)
            {
                array_push($tmp,$otroCon->set[$i]);
            }
        }

        //$tmp = array_diff_assoc($this->set, $otroCon->set);

        $dif = new Conjunto(count($tmp));

        $dif->set = $tmp;
        $dif->items = count($dif->set);

        return $dif;
    }
}
/*
//Esta es la pequeña prueba que hice
$c1 = new Conjunto(5);

$c1->incluir(1);
$c1->incluir(1);
$c1->incluir(2);
$c1->incluir(3);
$c1->incluir(4);

//echo $c1->getItems();
$c2 = new Conjunto(3);

$c2->incluir(6);
$c2->incluir(4);
$c2->incluir(1);
echo "Los 2 Conjuntos<br>";
echo $c1->pasarAString();

echo $c2->pasarAString();

echo "<br>Conjunto Interseccion<br>";
$tmp = $c1->interseccion($c2);
echo $tmp->pasarAString();
echo $tmp->getItems();

echo "<br>Conjunto Union<br>";
$tmp = $c1->union($c2);
echo $tmp->pasarAString();
echo $tmp->getItems();

echo "<br>Conjunto Diferencia<br>";
$tmp = $c1->diferencia($c2);
echo $tmp->pasarAString();
echo $tmp->getItems();

echo "<br>Los 2 Conjuntos<br>";
echo $c1->pasarAString();

echo $c2->pasarAString();*/