<?php
$handle = fopen("https://ru.wikipedia.org/wiki/%D0%97%D0%B0%D0%B3%D0%BB%D0%B0%D0%B2%D0%BD%D0%B0%D1%8F_%D1%81%D1%82%D1%80%D0%B0%D0%BD%D0%B8%D1%86%D0%B0", "r");
$contents = "";
while (!feof($handle)) {
    $contents .= fread($handle, 1);
}
fclose($handle);
echo $contents;
