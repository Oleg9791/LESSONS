<?php
if (!isset($_COOKIE["count12"]))
    setcookie("count12", 1);
else
    setcookie("count12", $_COOKIE["count12"] + 1);
echo $_COOKIE["count12"];//счетчик куки в браузере