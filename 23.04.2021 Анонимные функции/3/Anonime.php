<?php

$a = function ($name): void {
    echo "Hello $name<br>";
};
$a("Piter");
$b = $a;
$b("Alex");
