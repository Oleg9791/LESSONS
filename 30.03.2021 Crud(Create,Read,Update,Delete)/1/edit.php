<?php
include_once "connect.php";
//echo $_POST['id'];
$sql = "UPDATE `vedomost` SET `name`='$_POST[name]',`zp`='$_POST[zp]' WHERE `id`=$_POST[id]";
/** @var mysqli $link */
mysqli_query($link, $sql);
header("Location: show.php");
