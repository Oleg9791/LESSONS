<?php
spl_autoload_register(function ($class) {
//    echo $class;
    include "Classes/$class.php";
});
