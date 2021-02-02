<?php
//$str = "not to be";
$str = "mnot to kbe";

$pat = "/^(be)|(not\sto\sbe)$/i";
if (preg_match($pat, $str)) {
    echo "Вхождение найдено";
} else {
    echo "Вхождение  не найдено";

}