<?php
function arraySumma($array)
{
    $sum = 0;
    foreach ($array as  $value) {
        $sum += $value;
    }
    return $sum;
}


echo array_sum([3, 6, 9]);
