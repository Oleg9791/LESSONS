<?php


namespace App;


class Moloko implements IStandard
{
    public function tasty(): bool
    {
        return true;
    }

    public function calories(): float
    {
        return 42;

    }

}