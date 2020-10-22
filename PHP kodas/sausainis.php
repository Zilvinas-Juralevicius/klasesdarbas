<?php
$sausainelio_vardas = 'vartotojas';
$sausainelio_reiksme = 'BIG Z';
setcookie($sausainelio_vardas, $sausainelio_reiksme, time() + (+45), '/');

echo  "Sausainelis issaugotas";
?>
