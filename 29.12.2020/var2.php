<?php

$arr = [1, "two" => 2, 3, 4, 5,];

foreach ($arr as $value) {
    echo "$value<br>";
}

foreach ($arr as $key => $value) {
    echo "$key = $value<br>";
}
