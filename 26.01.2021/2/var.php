<?php
function  bubble($array)
{
    for ($n = count($array) - 1; $n > 0; $n--) {
        for ($i = 0; $i < $n; $i++) {
            if ($array[$i] > $array[$i + 1]) {
                $buf = $array[$i];
                $array[$i] = $array[$i + 1];
                $array[$i + 1] = $buf;
            }
        }
        // echo "\n";
    }
    return $array;

}

$arr = [1, 4, 8, 3, 9, 5];
// $arr=["ab","nc","na","kl"];
print_r($arr);

$arr2 = bubble($arr);
print_r($arr2); //сортирует массив от меньшего к большему
