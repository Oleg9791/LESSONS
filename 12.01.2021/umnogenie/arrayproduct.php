<?php
function arraySumma($array)
{
    $sum = 1;
    foreach ($array as  $value) {
        $sum *= $value;
    }
    return $sum;
}


echo arraySumma([3, 3, 3]);
