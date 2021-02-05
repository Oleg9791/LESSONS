<?php

$str = $_POST["name"];
$pat = "/:\)/i";
$rep = "<img src='Emotes-face-smile-icon.png'>";

$str2 = preg_replace($pat, $rep, $str);
echo $str2;