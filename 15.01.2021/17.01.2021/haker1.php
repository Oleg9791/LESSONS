<?php

$handle = fopen("http://htmlbook.ru/html", "r");

$contents = "";

while (!feof($handle)) {
    $contents .= fread($handle, 1);
}
fclose($handle);
echo $contents;
