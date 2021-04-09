<?php


class Calc
{

    public float $a;
    public float $b;

    public function __construct($a, $b)
    {
        $this->a = $a;
        $this->b = $b;
    }

    public function sum(): float
    {
        return $this->a + $this->b;
    }

    public function ras(): float
    {
        return $this->a - $this->b;
    }
}

class CalcOne extends Calc

{
    public function mult()
    {
        return $this->a * $this->b;
    }

    public function div()
    {
        return $this->a / $this->b;
    }
}

$number = new Calc(10, 45);
$numberOne = new CalcOne(5, 10);
echo $number->sum() . "<br>";

echo $numberOne->mult();

