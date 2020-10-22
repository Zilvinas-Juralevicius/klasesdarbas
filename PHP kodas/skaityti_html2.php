<?php

$txt = "Zilvinas";

$manofailas = fopen("duomenys.html", "r") or die ("Unable to open file!");
$manofailas2 = fopen("nauji_duomenys.html", "w") or die ("Unable to open file!");

$pasaulis = fread($manofailas, filesize("duomenys.html"));

$rezulatas = str_replace("pasauli", $txt, $pasaulis);
fwrite($manofailas2, $rezulatas);

echo $rezulatas;


fclose($manofailas);