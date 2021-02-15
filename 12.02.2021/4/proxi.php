<?php
$header = get_headers($_POST["url"], 1);
header('Content-Type: '.$header['Content-Type']);

print_r($header);
echo $header["Content-Type"];
echo file_get_contents($_POST["url"]);