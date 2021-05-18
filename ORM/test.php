<?php
include "autoload.php";

use W1020\Db;

$config = [
    "servername" => "localhost",
    "username" => "root",
    "password" => "root",
    "dbname" => "guestbookk"
];

$db = new Db($config);

$gb = $db->query("SELECT * FROM 'gb'");
print_r($gb);