<?php
$html = "Text    Text   Text       Text .\n";
$counter = 0;
do {
     echo $html = str_replace("  ", " ", $html, $counter);
} while ($counter > 0);
echo $html;//заменяет пробелы бесконечно по счетчику
