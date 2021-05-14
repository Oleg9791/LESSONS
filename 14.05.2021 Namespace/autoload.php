<?php
spl_autoload_register(function ($class) {
    include "App/$class.php";
});