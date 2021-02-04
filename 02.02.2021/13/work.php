<?php
$str = "Всем Привет Привет привет   привет хорошо Привет  ";
//$str2=str_replace(""," ",$str);
//$str1 = explode(' ', $str);
//print_r($str1);
$pat = "/привет/iu";
//
//$str2 = preg_match($pat, $str1);
//$sum = 0;
//foreach ($str1 as $value) {
//    if (($value == 'Привет') or ($value == 'привет')) {
//    $value = $sum + 1;
//$sum += 1;
//    }
//}
echo preg_match_all($pat, $str);

//echo "кол-во слов Привет = ".$sum;