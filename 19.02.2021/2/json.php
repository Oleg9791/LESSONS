<?php
//$arr = [1, 2, 3, 4, 5];
//echo json_encode($arr);
//
//$arr = ['a' => 1, 2, 3, 4, 5];
//echo json_encode($arr);

$guestBook = [
    ['msg' => 'привет', 'name' => 'Вася'],
    ['msg' => 'hello', 'name' => 'Петя'],
];
echo  json_encode($guestBook);
