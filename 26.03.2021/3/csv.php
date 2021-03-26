<?php
header('Content-Disposition: attachment; filename="csv.php"');
$link = mysqli_connect('localhost', 'root', 'root', 'guestbookk');

$sql = $sql = "SELECT * FROM `opros`";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_assoc($result)) {
    echo "$row[id];$row[name];$row[event];$row[comment];$row[telefon]\n";
}



