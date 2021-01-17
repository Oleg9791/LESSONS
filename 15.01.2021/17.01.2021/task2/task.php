<?php

$a = $_POST["path"];

if (is_file($a)) {
    unlink($a);
} else {
    echo "Warning! This is not file";
}
