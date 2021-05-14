<?php
include "autoload.php";

//use Oleg\Calc;
//use Linda\Calc;

$calc1 = new Linda\Calc(3, 5);
echo $calc1->sum();

$calc2 = new Oleg\Calc(3, 5);
echo $calc2->sum();
