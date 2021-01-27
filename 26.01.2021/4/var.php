<?php
$arr = [
    "img12.png",
    "img10.png",
    "img32.png",
    "img2.png",
    "img1.png",
];
sort($arr);
print_r($arr);

natsort($arr);
print_r($arr);// естественная сортировка игнорируя буквы,сортирует по значению
