<?php


class NewCalc extends Calc
{
    public function div(): float
    {
        return $this->a / $this->b;
    }

    public function sup(): float
    {
        return $this->a - $this->b;
    }

}