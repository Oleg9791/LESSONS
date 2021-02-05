<?php
$pat='/^[0-9A-Z_]+@[0-9A-Z]+\.[A-Z]{2,6}$/iu';
if (preg_match($pat, $_POST["text"])) {
    echo 'да';
} else {
    echo 'нет';
}