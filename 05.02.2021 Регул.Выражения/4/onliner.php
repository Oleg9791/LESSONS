<?php
$data = file_get_contents("https://www.onliner.by");
$pat = "/Минск/iu";
echo preg_match_all($pat, $data);