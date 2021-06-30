<?php
include "vendor/autoload.php";

use App\Calculator;


$calc = new Calculator();
echo $calc->setA(3)->setB(5)->sum() . "<br>";
echo $calc->setA(3)->setB(5)->mult() . "<br>";
echo $calc->setA(3)->setB(5)->difference() . "<br>";
echo $calc->setA(3)->setB(5)->division();