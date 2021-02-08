<?php

$data = file_get_contents("https://www.onliner.by");
$pat = "/\bМинск\b/iu";
$match=[];
echo preg_match_all($pat, $data,$match);
print_r($match);
