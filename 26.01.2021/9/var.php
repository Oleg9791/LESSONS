<?php
$arr = ["one", "two", "three"];
echo current($arr) . "<br>";
next($arr);
echo current($arr) . "<br>";
reset($arr);
echo current($arr) . "<br>";
end($arr);
echo current(($arr)) . "<br>";
