<?php
//print_r($_POST);
$link = mysqli_connect('localhost', 'root', 'root', 'guestbookk');

if (!empty($_POST)) {
    $sql = "INSERT INTO `opros`(`name`, `event`, `comment`, `telefon`) VALUES ('$_POST[name]','$_POST[event]','$_POST[comment]','$_POST[telefon]')";
//    echo $sql;
    mysqli_query($link, $sql);

}
header("location: thanks.html");


