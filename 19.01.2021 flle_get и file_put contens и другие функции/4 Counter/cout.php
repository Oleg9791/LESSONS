<?php

$counter = file_get_contents("count.txt");

// echo $counter += 1;

echo file_put_contents("count.txt", ++$counter);
