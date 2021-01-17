<?php

$a=$_POST["path1"];

$b=$_POST["path2"];

if (is_file($a) ) {
   rename($a,$b);
}else {
    echo "Warning! This is not file!!!";
}
