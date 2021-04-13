<?php
// Написать класс калькулятор умеющий складывать и вычитать  два числа.
//Написать потомка класса калькулятор умеющего умножать и делить числа.

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

$number = new Calc(15, 45);
$numberOne = new CalcOne(15, 10);
echo $number->sum() . "<br>";

echo $numberOne->mult() . "<br>";
echo $numberOne->div();

