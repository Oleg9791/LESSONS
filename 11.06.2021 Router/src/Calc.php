<?php
namespace Oleg;

class Calc
{
    protected float $a;

    /**
     * @param float $a
     * @return $this
     */
    public function setA(float $a): static
    {
        $this->a = $a;
        return $this;
    }

    protected float $b;

    /**
     * @param float $b
     * @return $this
     */
    public function setB(float $b): static
    {
        $this->b = $b;
        return $this;

    }

    public function sum()
    {
        return $this->a + $this->b;
    }
}