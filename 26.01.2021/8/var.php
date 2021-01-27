<?php
function cmp($a, $b)
{
    if (gettype($a) == gettype($b)) {
        return ($a < $b) ?  0 : 1;
    }
    return (is_string($a)) ?  1 : 0;
}
$arr = [5, '4', 3, '2', 1];
usort($arr, "cmp");
print_r($arr); // сортирует массив по значениям используя пользовательскую функцию для сравнения элементов
