<?php

$a = "task.txt";

$f = fopen($a, "r");

$counter = fread($f, filesize($a));

fclose($f);

echo ++$counter;

$f = fopen($a, "w+");

fwrite($f, $counter);

fclose($f);
