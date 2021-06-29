<?php

namespace App;

interface IStandard
{
    /** еда сделанная по госту - вкусная
     * @return bool
     */
    public function tasty(): bool;

    /**
     * @return float
     */
    public function calories(): float;
}