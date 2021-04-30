<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="Classes/style.css">
</head>
<body>
<?php
include "autoload.php";
$tictac = new TicTac();
$tictac->init(3)->putCross(1,1);

$map = new Map();



?>

</body>
</html>
