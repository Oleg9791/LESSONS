<?php


abstract class AbstractCalc
{
    protected float $a;
    protected float $b;

    public function __construct(float $a, float $b)
    {
        $this->setA($a);
        $this->setB($b);
    }

    /**
     * @param float $a
     */
    public function setA(float $a)
    {
        $this->a = $a;
        return $this;
    }

    /**
     * @param float $b
     */
    public function setB(float $b)
    {
        $this->b = $b;
        return $this;

    }

    abstract public function sum(): float;

    abstract public function mult(): float;
}