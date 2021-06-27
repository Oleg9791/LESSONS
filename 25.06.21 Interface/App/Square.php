<?php

namespace App;

class Square implements IFigure
{
    protected float $a;

    public function __construct($a)
    {
        $this->a = $a;
    }

    public function sqr(): float
    {
        return $this->a ** 2;
    }

    public function perimeter(): float
    {
        return $this->a * 4;
    }

    public function name(): string
    {
        return "Квадрат";
    }


}