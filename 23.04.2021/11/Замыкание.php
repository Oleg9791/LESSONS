<?php
$msg = "Hello";

$test = function () use ($msg) {
    echo $msg;
};
$msg = "bye";
$test();

echo "<br>";

$msg = "Hello";

$test = function () use (&$msg) {
    echo $msg;
};
$msg = "bye";
$test();
