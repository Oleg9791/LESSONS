<?php
$arr = [
    "img12.png",
    "img10.png",
    "img32.png",
    "IMG2.png",
    "img1.png",
];
natsort($arr);
print_r($arr);

natcasesort($arr);// сортировка без учета регистра
print_r($arr);
