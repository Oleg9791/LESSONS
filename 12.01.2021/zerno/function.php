<?php

function countZerno($n = 8, $m = 8)
{
    $c = 1;
    $s = 0;

    for ($i = 1; $i <= $n * $m; $i++) {
        $s += $c;
        $c *= 2;
    }

    return $s;
}
echo countZerno();
