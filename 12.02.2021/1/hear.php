<?php
echo " ok no";//генерирует ошибку- до header не должно быть никакого вывода
header('HTTP/1.0 404 Not Found');
