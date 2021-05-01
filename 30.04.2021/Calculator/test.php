<?php
include "Calculator.php";

$calc = new Calculator(1,4);
//$calc->setA(6);
echo $calc->setA(8)->getA();

echo $calc->setA(4)->setB(3)->sum();

//echo $calc->sum();
//echo $calc->setA(4)->setB(3)->sum();
