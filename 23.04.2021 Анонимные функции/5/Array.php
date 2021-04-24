<?php
$a1 = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
print_r($a1);

$a2 = array_map(function ($x) {
    return $x * $x;
}, $a1);
print_r($a2);
