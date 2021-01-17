<?php
$fp = fopen("red.txt", "r");

$str=fread($fp, filesize("red.txt"));

echo $str;

fclose($fp);
