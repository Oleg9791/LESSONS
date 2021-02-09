<?php

$a = file_get_contents("new.txt");

echo preg_replace("/\d/","<img src='$0.png'>",$a);

file_put_contents("new.txt", $a + 1);



