<?php
$dir = array_diff(scandir("files\\"), ['..', '.']);
rsort($dir);
//print_r($dir);
foreach ($dir as $value) {
    echo "<a href='files\\$value'>$value</a><br>";
}
