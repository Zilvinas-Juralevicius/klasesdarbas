<?php

include 'car.php';

$automobilis = new Car();
$automobilis->spalva = 'raudona';
$automobilis->greitis = '50km/h';
//$automobilis->gautiRida() = '50km/h';

/**
 * @param Car $automobilis
 */
function testtinisVaziavimas(Car $automobilis): void
{
    echo $automobilis->gautiSpalva() . '<br>';
    $automobilis->vaziuoti();
    echo "Rida:" . $automobilis->gautiRida();
}

testtinisVaziavimas($automobilis);