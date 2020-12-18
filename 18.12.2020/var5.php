<?php

$a = [1, 2, 3, 4, 5];
$sum = 0;

// print_r($a);
// echo $a[2];
for ($i = 0; $i < 5; $i++) {
    //    echo $a[$i];
    // $sum = $sum + $a[$i];
    $sum += $a[$i];
} //выводит все элементы
echo $sum;
