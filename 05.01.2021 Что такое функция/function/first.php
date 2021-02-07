<?php

function max2($a, $b)
{
    if ($a > $b) {
        $res = $a;
    } else {
        $res = $b;
    }
    return $res;
}

$a = 5;
$b = 29;
$c = 3;
$d = 14;
$e = 7;


echo max2(max2(max2(max2($a, $b), $c), $d), $e);
