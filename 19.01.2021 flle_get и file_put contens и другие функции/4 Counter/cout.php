<?php

$counter = file_get_contents("calc.txt");

// echo $counter += 1;

echo file_put_contents("calc.txt", ++$counter);
