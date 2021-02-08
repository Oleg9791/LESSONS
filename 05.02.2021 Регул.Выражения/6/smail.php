<?php


$str = $_POST["name"];
$str = preg_replace("/:\)/iu", "<img src='happy-icon.png'>", $str);
echo preg_replace("/:\(/iu", "<img src='Smiley-27-icon.png'>", $str);
$pattern = [
    "/:)/iu",
    "/:(/iu"
];
$replacement = [
    "<img src='smile.png'>",
    "<img src='sad.png'>"
];
//echo preg_replace($pattern, $replacement, $str);