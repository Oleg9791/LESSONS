<?php
$arr = [2, 3, 5, 6, 8, 9];

$sum = 0;

for ($i = 0; $i <= 5; $i++) {
    $sum = $sum + $arr[$i];
}
echo $sum . "<br>";

$sum = 0;

foreach ($arr as $value) {
    $sum = $sum + $value;
}
echo $sum;
