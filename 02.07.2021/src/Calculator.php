<?php

namespace App;

class Calculator implements ICalculator
{
    protected float $a;
    protected float $b;

    /**
     * @param float $a
     * @return $this
     */
    public function setA(float $a): static
    {
        $this->a = $a;
        return $this;
    }

    /**
     * @param float $b
     * @return $this
     */
    public function setB(float $b): static
    {
        $this->b = $b;
        return $this;

    }

    public function sum(): float
    {
        return $this->a + $this->b;
    }

    public function diff(): float
    {
        return $this->a - $this->b;
    }

    public function mult(): float
    {
        return $this->a * $this->b;
    }

    public function div(): float
    {
        return $this->a / $this->b;
    }


}