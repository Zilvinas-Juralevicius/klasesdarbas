<?php

include 'car.php';

$automobilis = new Car();
$automobilis->spalva = 'raudona';
$automobilis->greitis = '50km/h';

echo $automobilis->gautiSpalva() . '<br>';
$automobilis->vaziuoti();