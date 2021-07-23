<?php
$password = "123";
$salt = "dvvvvvvvvvvvverhytj";
//echo md5($password . $salt);
//if ("202cb962ac59075b964b07152d234b70" == md5($password)) {
//    echo "Yes";
//}

if ("d1b5bb301ec728e349cfd2574a4ed034" == md5($password . $salt)) {
    echo "Yes";
}
