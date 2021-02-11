<?php
header("Content-type: 52.pdf");

header("Content-Disposition: attachment; filename='52.pdf");

// файл

readfile('original.pdf');

