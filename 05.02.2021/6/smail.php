<?php


$str = $_POST["name"];
$str = preg_replace("/:)/iu", "<img src='smile.png'>", $str);
echo preg_replace("/:(/iu", "<img src='sad.png'>", $str);
$pattern = [
    "/:)/iu",
    "/:(/iu"
];
$replacement = [
    "<img src='smile.png'>",
    "<img src='sad.png'>"
];
echo preg_replace($pattern, $replacement, $str);