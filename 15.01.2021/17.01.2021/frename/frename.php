<?php
$path = $_POST["path"];

if (is_file($path)) {
    unlink($path);
} else {
    echo "Warning!Tis is not file!";
}
