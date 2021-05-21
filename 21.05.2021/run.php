<?php
require __DIR__ . '/vendor/autoload.php';

use Oleg\Calc;
use Oleg\CalcMult;
use Oleg\CalcDif;

$calc = new Calc(30, 5);
echo $calc->sum() . "<br>";

$calcMult = new CalcMult(35, 5);
echo $calcMult->mult(). "<br>";

$calcDif = new CalcDif(35, 5);
echo $calcDif->dif();

