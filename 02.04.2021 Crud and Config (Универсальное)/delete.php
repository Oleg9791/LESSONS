<?php //delete.php
include_once "connect.php";
$sql = "DELETE FROM {$config['mysql']['table']} WHERE id = $_GET[id]";
mysqli_query($link, $sql);
header("Location: show.php");
