<?php
$str = file_get_contents("https://www.belta.by/president/view/minsk-eto-gorod-s-kotorogo-nado-brat-primer-lukashenko-prinjal-s-dokladom-mera-stolitsy-427792-2021/");
//echo $str;
$pattern = "/\bминск\b/ui";
$array = [];
echo  preg_match_all($pattern, $str, $array);
//print_r($array);
//echo $str1;
$count = 0;
foreach ($array[0] as $value) {

    echo $value;

}
//echo "Кол-во слов <b>минск</b> равно $count " . "<br>";

