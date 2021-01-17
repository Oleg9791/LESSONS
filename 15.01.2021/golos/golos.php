<?php

$data = file("golos.txt");
// print_r($data);
$answer = $_POST["action"];
// echo $answer;
$data[$answer] = ($data[$answer] + 1) . "\n";
print_r($data);

$saveData = $data[0] . $data[1] . $data[2] . $data[3];
// echo  $saveData;

$fp = fopen("golos.txt", "w+");

fwrite($fp, $saveData);
fclose($fp);
