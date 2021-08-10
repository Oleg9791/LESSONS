<?php


include "../vendor/autoload.php";

use App\Single;

//$single = new Single();

$a = Single::getItem();
$a->name = "Lena";
$b = Single::getItem();
$b->name = "Tom";
$c = Single::getItem();
$c->name = "Roma";

echo $a->name;
echo $b->name;
echo $c->name;