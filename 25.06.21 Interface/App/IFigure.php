<?php

namespace App;

interface IFigure
{
    public function sqr(): float;

    public function perimeter(): float;

    public function name(): string;
}