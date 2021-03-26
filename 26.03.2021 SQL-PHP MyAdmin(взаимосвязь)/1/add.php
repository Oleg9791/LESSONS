<?php
$link = mysqli_connect('localhost', 'root', 'root', 'guestbookk');

if (!empty($_POST)) {
    $sql = "INSERT INTO `gb`(`message`, `name`) VALUES ('$_POST[message]', '$_POST[name]')";
    mysqli_query($link, $sql);

}
header("location: thanks.php");
