<?php
$number = 3;

switch ($number) {
    case 0:
        $str = "ноль";
        break;

    case 1:
        $str = "один";
        break;

    case 2:
        $str = "два";
        break;

    case 3:
        $str = "три";
        break;

    case 4:
        $str = "четыре";
        break;

    case 5:
        $str = "пять";
        break;

    default:
        $str = "нет такого числа";
        break;
}
echo $str;
