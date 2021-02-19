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
include "smile.php";

$data = json_decode(file_get_contents("data.json"), true);
foreach ($data as $row) {
    if (!cenzura($row["msg"])){


        echo smile($row["msg"]) . $row["name"] . "<br>\n";
}
}
?>
<form action="add.php" method="post">
    <textarea name="msg" cols="30" rows="10"></textarea>
    <input type="text" name="name">
    <input type="submit" value="ok">
</form>
</body>
</html>
