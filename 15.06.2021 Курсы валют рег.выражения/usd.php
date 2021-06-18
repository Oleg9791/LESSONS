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
// echo $html = file_get_contents("https://myfin.by/currency/minsk");
$html = file_get_contents("https://myfin.by/currency/minsk");

//preg_match("/Доллар США<\/a><\/td>.*?<td>(.*?)<\/td>/ui", $html, $match);
preg_match_all("/США<\/a><\/td>.*?\n.*?<td>(.*?)<\/td>/uim", $html, $match);
//preg_match_all("/США<\/a><\/td>.*?\n.*?<td>(.*?)<\/td>/uim", $html, $match);
echo $match[1][0];
//print_r($match);
?>

</body>
</html>

