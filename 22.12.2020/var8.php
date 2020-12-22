<?php
for ($i = 1;; $i++) {
    if ($i > 10) {
        break;
    }
    echo $i;
}

echo "<br\n>";
$i = 1;
for (;;) {
    if ($i > 10) {
        break;
    }
    echo $i;
    $i++;
}
