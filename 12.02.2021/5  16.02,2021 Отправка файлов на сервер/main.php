<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div>
    <img src="img\word.png" alt="картинка">
    <img src="img\pdf.png" alt="картинка">
    <img src="img\cel.png" alt="картинка">
    <img src="img\dword.png" alt="картинка">
</div>
<br>

<form enctype="multipart/form-data" action="up.php" method="POST">
    <!-- Поле MAX_FILE_SIZE должно быть указано до поля загрузки файла -->
    <input type="hidden" name="MAX_FILE_SIZE" value="300000000000"/>
    <!-- Название элемента input определяет имя в массиве $_FILES -->
    Отправить этот файл: <input name="userfile" type="file"/>
    <input type="submit" value="Отправить файл"/>
</form>
<br>
<?php
include "showdir.php";
?>
</body>
</html>
</html>