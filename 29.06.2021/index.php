<?php
//include "vendor/autoload.php";
//
//use App\DB;
//use App\JsonTable;


//$json = new JsonTable("table2.json");
//print_r($json->read());
//$json->create(["FIO" => "Rustam", "ZP" => 12]);
//$json->delete(5);
//$json->update(2,["FIO" => "Лена", "ZP" => 945]);

//$db = new BD(new JsonTable("table3.json"));
//$db->insert(["FIO" => "Rust", "ZP" => 121]);


//$db = new DB(new \App\PhpTable("table.php"));
//$db2 = new DB(new \App\JsonTable("table4.json"));
//print_r($db2->select());
//$db2->insert(["FIO" => "LUDA", "ZP" => 321]);
//$db2->delete(0);

//print_r($db->select());

//print_r($db->select());
//$db->insert(["FIO" => "OLEG", "ZP" => 999]);

//$db->insert(["FIO" => "Lera", "ZP" => 235]);
//$db->update(27, ["FIO" => "Anna", "ZP" => 111]);
//$db->delete(27);


require 'vendor/autoload.php';

use App\DB;
use App\JsonTable;
use App\TxtTable;

//$json = new JsonTable('table.json');

//print_r($json->reade());

//$json->create(["fio" => "Anton", "zp" => 100]);
$jsonDriver = new JsonTable('table.json');
$txtDriver = new TxtTable('table.txt');
$db = new DB($txtDriver);
//$db->insert([0 => ['Name' => 'Иванов', 'ZP' => 150]]);
print_r($db->select());


$db->insert(["Name" => "Kolya", "ZP" => 11100]);
$db->insert(["Name" => "Anton", "ZP" => 900]);
//$db->update(1, ["fio" => "Kolyaa", "zp" => 1100]);
