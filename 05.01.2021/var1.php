<?php

$c = $_POST["c"];

$i = 0;
$d = 0;
while ($i < $c) {
    $b = str_split(random_int(123456, 987654));
    if ($b[0] + $b[1] + $b[2] == $b[3] + $b[4] + $b[5]) {
        $d = $d + 1;
    }
    $i++;
}
echo "счастливые билеты" . $d . "<br>";
echo ($d * 100) / $c;
