<?php
$time_start = microtime(true);

for ($i = 0; $i < 1000; $i++) {
    //ничего не делать.Повторить 1000раз
}

$time_end = microtime(1);
$time = $time_end - $time_start;

echo "ничего не делал $time секунд\n";
