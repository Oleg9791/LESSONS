<?php

$a = $_POST["n"];

$work = [
    "ноль" => "serro",
    "один" => "one",
    "два" => "two",
    "три" => "
    three",
    "четыре" => "four",
    "пять" => "five"
];
if (isset($work[$a])) {
    echo $work[$a];
} else {
    echo "Нет такого слова";
}
// echo $work[$a];
