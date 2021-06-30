<?php

namespace App;
class Rectangle implements IFigure
{
    protected float $a;
    protected float $b;

    public function __construct($a, $b)
    {
        $this->a = $a;
        $this->b = $b;
    }

    public function sqr(): float
    {
        return $this->a * $this->b;
    }

    public function perimeter(): float
    {
        return ($this->a * $this->b) * 2;

    }

    public function name(): string
    {
        return "Прямоугольник";
    }


}