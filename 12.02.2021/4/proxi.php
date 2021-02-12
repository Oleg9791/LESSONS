<?php
$header = get_headers($_POST["url"], 1);
//print_r($header);
//echo $header["Content-Type"];
//header('Content-Type: '.$header['Content-Type']);
echo file_get_contents($_POST["url"]);