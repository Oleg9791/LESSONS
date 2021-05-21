<?php


namespace Oleg;


class CalcMult

{
    protected float $a;
    protected float $b;

    public function __construct($a, $b)
    {
        $this->a = $a;
        $this->b = $b;
    }


    public function mult(): float
    {
        return $this->a * $this->b;
    }

}