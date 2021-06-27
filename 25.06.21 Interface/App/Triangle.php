<?php


namespace App;


class Triangle implements IFigure
{
    protected float $a;
    protected float $b;

    public function __construct($a, $b)
    {
        $this->a = $a;
        $this->b = $b;
    }

    public function name(): string
    {
        return "Треугольник";
    }

    public function sqr(): float
    {
        return ($this->a * $this->b) / 2;
    }

    public function perimeter(): float
    {
        return sqrt($this->a ** 2 + $this->b ** 2) + $this->a + $this->b;
    }


}