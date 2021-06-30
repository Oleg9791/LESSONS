<?php


namespace App;


class Circle implements IFigure
{
    protected float $radius;

    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    public function name(): string
    {
        return "Круг";
    }

    public function sqr(): float
    {
        return pi() * $this->radius ** 2;

    }

    public function perimeter(): float
    {
        return 2 * pi() * $this->radius;

    }


}