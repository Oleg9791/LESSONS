<?php
//Написать класс прямоугольного треугольника
//реализовать метод расчета гипотенузы

// добавить сеттеры для катетов треугольника

class Trian
{

    protected float $a;
    protected float $b;


    public function __construct($a, $b)
    {
        $this->a = $a;
        $this->b = $b;


    }

    public function c(): float
    {
        return sqrt($this->a ** 2 + $this->b ** 2);
    }

    /**
     * @param float $a
     */
    public function setA(float $a): void
    {
        if ($a > 0) {
            $this->a = $a;
        }

    }

    /**
     * @param float $b
     */
    public function setB(float $b): void
    {
        if ($b > 0) {
            $this->b = $b;
        }
    }
}

$tria = new Trian(0, 7);

echo $tria->c()."<br>";
$tria->setA(2);
$tria->setB(2);
echo $tria->c();
