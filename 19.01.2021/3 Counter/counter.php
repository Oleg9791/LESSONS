<?php

$c = file_get_contents("counter.txt");

echo ++$c;

file_put_contents("counter.txt", $c); // счетчик посещений
