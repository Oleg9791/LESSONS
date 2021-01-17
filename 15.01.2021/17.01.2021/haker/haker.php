<?php
$fp = fopen("https://belmeta.com/vacansii?l=%D0%92%D0%B8%D1%82%D0%B5%D0%B1%D1%81%D0%BA&df=1", "r");
$contents = "";
while (!feof($fp)) {
    $contents .= fread($fp, 1);
}
fclose($fp);
echo $contents;
