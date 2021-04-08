<?php

class Calc
{
    public float $a;
    public float $b;
//    private float $a;
//    private float $b;


    public function __construct($a, $b)
    {
        $this->a = $a;
        $this->b = $b;
    }

    public function Sum(): float
    {

        return $this->a + $this->b;
    }

    public function Ran(): float
    {

        return $this->a - $this->b;
    }

    public function Uno(): float
    {

        return $this->a * $this->b;
    }

    public function Del(): float
    {

        return $this->a / $this->b;
    }

}


$calc = new Calc(10, 2);

echo $calc->Sum() . "<br>";
echo $calc->Ran() . "<br>";
echo $calc->Uno() . "<br>";
echo $calc->Del() . "<br>";
echo $calc->a = 35 ;
echo "<br>";
echo $calc->Sum() . "<br>";
echo $calc->Ran() . "<br>";
echo $calc->Uno() . "<br>";
echo $calc->Del() . "<br>";
