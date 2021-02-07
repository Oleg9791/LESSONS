<?php
$str = "Кто-то сказал Дурак Всем Привет Привет привет   привет хорошо Привет";
$pat1 = "/привет/ui";
$pat = "/дурак/ui";
$rep = "ай-яй-яй";
echo preg_match_all($pat1, $str);
echo "\n";

$str2 = preg_replace($pat, $rep, $str);
echo $str2;// 1 вариант
echo $str2 . "\n";

// 2 вариант
$pat2 = "Привет";
$pat3 = "привет";
//echo $str2 . "\n";

$str1 = preg_split("/ /", $str);
$sum = 0;
foreach ($str1 as $value) {
    if (($value == $pat2) or ($value == $pat3)) {
        $sum += 1;
    }
}
echo $sum;
// 3 вариант
echo "\n";

echo substr_count($str, "Привет");