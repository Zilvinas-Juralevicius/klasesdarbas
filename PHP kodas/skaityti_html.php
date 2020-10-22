<?php
$manofailas = fopen("duomenys.html", "r") or die("nepavyko atidaryti");

echo fread($manofailas, filesize("duomenys.html"));

fclose($manofailas);

