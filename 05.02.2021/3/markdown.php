<?php


$str = $_POST["name"];
$str = preg_replace("/:\)/iu",);
$rep = "<i>$1</i>";

$str2 = preg_replace($pat, $rep, $str);
echo $str2;