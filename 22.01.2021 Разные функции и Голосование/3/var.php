<?php
$html=file_get_contents("http://onliner.by/");

echo substr_count($html,"onliner");// ищет кол-во повторений слова onliner