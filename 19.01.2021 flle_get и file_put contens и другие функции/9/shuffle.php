<?php

// $str = "Hello Word!";
// echo str_shuffle($str);

file_put_contents("file.txt",str_shuffle(file_get_contents('file.txt'))); // меняет случайным образом символы в файле file.txt
