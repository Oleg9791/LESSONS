<?php
$arr = [3, 2, 5, 4, 1];
//  asort($arr);
//  rsort($arr);// сортирует в обратном порядке
// arsort($arr);// сортирует в обратном порядке cохраняя ключи
ksort($arr); // сортирует по ключам
print_r($arr);
