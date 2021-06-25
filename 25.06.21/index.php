<?php
include "vendor/autoload.php";

use App\Printer;
use App\Square;
use App\Rectangle;


$sqare = new Square(5);
//echo $sqare->name() . "<br>";
//
//echo $sqare->sqr() . "<br>";
//echo $sqare->perimeter() . "<br>";

$rect = new Rectangle(3, 8);
//echo $rect->name() . "<br>";
//
//echo $rect->sqr() . "<br>";
//echo $rect->perimeter() . "<br>";

$print = new Printer($sqare);


$print->print();

$print->setFig($rect)->print();

$print->setFig((new \App\Triangle(4, 5)))->print();


$print->setFig((new \App\Circle(5)))->print();

