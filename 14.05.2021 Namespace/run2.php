<?php

include "autoload.php";

use Oleg\Calc as CalcO;
use Linda\Calc as CalcL;

$calc1 = new CalcL(3, 5);
echo $calc1->sum();

$calc2 = new CalcO(3, 5);
echo $calc2->sum();
