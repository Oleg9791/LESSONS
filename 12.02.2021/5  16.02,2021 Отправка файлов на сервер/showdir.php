<?php
$dir = array_diff(scandir("files\\"), ['..', '.']);
$a = scandir("files\\");
print_r($a);
rsort($dir);
print_r($dir);
$patWord = "/\.doc$/ui";
$patPdf = "/\.pdf/ui";
$patExc = "/\.xlsx/ui";
$patDocx = "/\.docx/ui";

foreach ($dir as $value) {
    if (preg_match($patWord, $value)) {
        echo "<a href='files\\$value'><img src='img\word.png' alt='картинка'>$value</a><br><br>";

    } elseif (preg_match($patPdf, $value)) {
        echo "<img src='img\pdf.png' alt='картинка'><a href='files\\$value'>$value</a><br><br>";

    } elseif (preg_match($patExc, $value)) {
        echo "<img src='img\cel.png' alt='картинка'><a href='files\\$value'>$value</a><br><br>";

    } elseif (preg_match($patDocx, $value)) {
        echo "<img src='img\dword.png' alt='картинка'><a href='files\\$value'>$value</a><br><br>";

    }
}
