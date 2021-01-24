<?php
$array= parse_ini_file("file.ini");

print_r($array);


$array= parse_ini_file("file.ini",true);

print_r($array);
