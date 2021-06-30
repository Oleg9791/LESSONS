<?php


namespace App;


class Liverka implements IStandard
{
    public function tasty(): bool
    {
        return true;
    }

    public function calories(): float
    {
        return 30;

    }

}