<?php
$c = fopen("green.txt", "w+");

fwrite($c, "Hello!");
fclose($c);
