<?php
include "vendor/autoload.php";

use App\DB;
use App\JsonTable;


//$json = new JsonTable("table2.json");
//print_r($json->read());
//$json->create(["FIO" => "Rustam", "ZP" => 12]);
//$json->delete(5);
//$json->update(2,["FIO" => "Лена", "ZP" => 945]);

//$db = new BD(new JsonTable("table3.json"));
//$db->insert(["FIO" => "Rust", "ZP" => 121]);


//$db = new DB(new \App\PhpTable("table.php"));
$db2 = new DB(new \App\JsonTable("table4.json"));
print_r($db2->select());
$db2->insert(["FIO" => "LUDA", "ZP" => 321]);
$db2->delete(0);

//print_r($db->select());

//print_r($db->select());
//$db->insert(["FIO" => "OLEG", "ZP" => 999]);

//$db->insert(["FIO" => "Lera", "ZP" => 235]);
//$db->update(27, ["FIO" => "Anna", "ZP" => 111]);
//$db->delete(27);


