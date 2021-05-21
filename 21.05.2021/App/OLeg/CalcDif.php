<?php


namespace Oleg;


class CalcDif
{
    protected float $a;
    protected float $b;

    public function __construct($a, $b)
    {
        $this->a = $a;
        $this->b = $b;
    }


    public function dif(): float
    {
        return $this->a / $this->b;
    }

}