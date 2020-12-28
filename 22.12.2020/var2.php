<?php
$arr = array(5 => 1, 12 => 2);
echo "<pre>";
print_r($arr);
echo "<pre>";
$arr[] = 56;
echo "<pre>";
print_r($arr);
echo "<pre>";
$arr["x"] = 42;
echo "<pre>";
print_r($arr);
echo "<pre>";
unset($arr[5]);
echo "<pre>";
print_r($arr);
echo "<pre>";
unset($arr);
print_r($arr);
