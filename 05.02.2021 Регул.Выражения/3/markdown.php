<?php


$str = $_POST["name"];
$pat = "/(:\))|(:\()/iu";
$rep = "<b>$0</b>";

$str2 = preg_replace($pat, $rep, $str);
echo $str2;