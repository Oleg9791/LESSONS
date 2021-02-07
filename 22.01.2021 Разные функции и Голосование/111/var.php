<?php
$answer = $_POST["a"];
$data = "var.txt";
$a = explode(".", file_get_contents($data));

$a[$answer] += 1;

file_put_contents($data, implode(".", $a));
p