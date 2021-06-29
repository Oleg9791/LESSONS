<?php


namespace App;


class Kat
{
    protected IStandard $eda;
    protected float $calories = 0;

    public function eat(IStandard $eda)
    {
        $this->eda = $eda;
        $this->calories += $this->eda->calories();
        return $this;
    }

    public function full(): float
    {
        return $this->calories;
    }

}