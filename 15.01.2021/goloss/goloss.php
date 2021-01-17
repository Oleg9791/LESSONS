<?php
$data = file("goloss.txt");

$answer = $_POST["a"];

$a[$b] = ($a[$b] + 1) . "\n";
print_r($a);

$saveData = $a[0] . $a[1] . $a[2] . $a[3];

$fp = fopen("goloss.txt", "w+");
fwrite($fp, $saveData);
fclose($fp);
