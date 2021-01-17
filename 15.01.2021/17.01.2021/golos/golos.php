<?php
$data = file("golos.txt");

$answer = $_POST["a"];

$data[$answer] = ($data[$answer] + 1)."\n";

$saveData = $data[0] . $data[1] . $data[2] . $data[3];

print_r($data);

$fp = fopen("golos.txt", "w+");

fwrite($fp, $saveData);

fclose($fp);
