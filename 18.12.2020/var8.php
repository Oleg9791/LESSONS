<?php
$a1 = [$_POST["a1"], $_POST["a2"], $_POST["a3"], $_POST["a4"], $_POST["a5"], $_POST["a6"], $_POST["a7"], $_POST["a8"], $_POST["a9"], $_POST["a10"]];
$a2 = ["4", "6", "8", "9", "75", "12", "40", "36", "12", "25"];
$i = 0;
$x = 0;
$y = 0;
while ($i < 10) {
    if ($a1[$i] == $a2[$i]) {
        $x = $x + 1;
    } else {
        $y = $y + 1;
    }
    $i++;
}
if ($x >= 5) {
    echo "Количество правильных ответов  " . $x . "<br>" . "Вы приняты";
} else {
    echo "Количество неправильных ответов  " . $y . "<br>" . "Вы  не приняты";
}
