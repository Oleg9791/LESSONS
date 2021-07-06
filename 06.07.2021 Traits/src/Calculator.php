<?php


namespace App;


class Calculator
{
    protected float $a;
    protected float $b;

    /**
     * @param string $a
     */
    public function setA(string $a): static
    {
        $this->a = $a;
        return $this;
    }

    /**
     * @param string $b
     */
    public function setB(string $b): static
    {
        $this->b = $b;
        return $this;

    }

    public function sum(): float
    {
        return $this->a + $this->b;
    }
}