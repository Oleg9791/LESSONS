<?php
$str = "hypertext language blue dark best dont programming";
$chars = preg_split('/b|d/i', $str);
print_r($chars);