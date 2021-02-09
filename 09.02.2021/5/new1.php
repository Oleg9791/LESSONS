<?php
header("Content-type: 52.pdf");

header("Content-Disposition: attachment; filename='downloaded/pdp'");

// файл

readfile('original.pdf');

