<?php

// $fp = fopen("red.txt", "w+");

// fwrite($fp, "White!");
// fclose($fp);

$a = fopen("Config.ini", "w+");
fwrite($a, "OK!");
fclose($a);
