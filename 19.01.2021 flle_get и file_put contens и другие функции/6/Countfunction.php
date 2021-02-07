<?php

$count = file_get_contents("https://www.php.net/manual/ru/indexes.functions.php");

echo substr_count($count, '<a href="function.arr');

// file_put_contents("file.txt", $count);
