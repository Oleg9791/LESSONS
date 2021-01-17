<?php
$fp = fopen("red.txt", "w+");
fwrite($fp, "Text");
fclose($fp);
