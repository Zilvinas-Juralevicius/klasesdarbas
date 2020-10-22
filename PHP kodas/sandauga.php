<?php declare(strict_type=1);
echo  '<br>';

function sandauga(float $a, float $b): float{
    return $a * $b;
}
$z = sandauga(1.5,2);
echo sandauga(sandauga(3,3), $z);

echo  '<br>';
$j  = 0;
while ($j < 10){
    echo sandauga($z,$j) . '<br>';
    $j++;
}