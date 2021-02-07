<?php
$str = $_POST["name"];
$pat = "/<b>(.*?)<\/b>/i";
$rep = "<i>$1</i>";

$str2 = preg_replace($pat, $rep, $str);
echo $str2;