<?php


namespace App;


class Kolbasa implements IStandard
{
    public function tasty(): bool
    {
        return true;
    }

    public function calories(): float
    {
        return 70;

    }

}