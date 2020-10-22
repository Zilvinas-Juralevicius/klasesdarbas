<?php
$manofailas = fopen("manoDuomenys.txt", "r") or die("nepavyko atidaryti");

echo fread($manofailas, filesize("manoDuomenys.txt"));

fclose($manofailas);