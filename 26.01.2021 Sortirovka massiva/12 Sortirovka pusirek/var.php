<?php
$arr = [4, 3, 7, 9, 8, 6, 1];

function arraySort($arr1)
{
    for ($i = 0; $i < count($arr1); $i++) {

        for ($y = $i + 1; $y < count($arr1); $y++) {

            if ($arr1[$i] > $arr1[$y]) {

                $buf = $arr1[$i];
                $arr1[$i] = $arr1[$y];
                $arr1[$y] = $buf;
            }
        }
    }
    return $arr1;
}
print_r(arraySort($arr)); //сортирует элементы массива методом сравнения и меняет местами при соблюдении условия
