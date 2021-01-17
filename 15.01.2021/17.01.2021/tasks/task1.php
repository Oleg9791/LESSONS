<?php

$a = fopen("green.txt", "r");

$str = fread($a, filesize("green.txt"));

echo $str;
fclose($str);
