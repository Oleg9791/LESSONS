<?php
include "vendor/autoload.php";

use App\Kat;
use App\Kolbasa;
use App\Moloko;
use App\Liverka;

$kat = new Kat();
$kat->eat(new Moloko());
$kat->eat(new Kolbasa());
$kat->eat(new Moloko());
$kat->eat(new Liverka());
echo $kat->full();