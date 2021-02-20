<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
$arr = [1, 2, 3, 4, 5];
echo json_encode($arr);

$arr = ['a' => 1, 2, 3, 4, 5];
echo json_encode($arr);

$guestBook = [
    ['msg' => 'привет', 'name' => 'Rita'],
    ['msg' => 'hello', 'name' => 'Петя'],
];
echo $a = json_encode($guestBook);
echo json_decode($a, true);
?>
</body>
</html>
