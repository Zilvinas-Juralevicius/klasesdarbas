<?php

$temp =[78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73];

echo 'Atsitiktine tempratura' . $temp [rand(0, count($temp))];
echo '<br>';

foreach ($temp as $dienosTemp){
    $suma += $dienosTemp;
}
$vidurkis = $suma / count($temp);
echo "Vidutine temperatura: $vidurkis";

rsort($temp);
echo "<br>Penkios auksciausios: ";
spausdintiGrafiskai($temp, 5);

sort($temp);
echo "Penkio zemiausios: ";
spausdintiGrafiskai($temp, 5);

function spausdintiGrafiskai(array $temp, $kiek): void
{
    $i = 0;
    foreach ($temp as $value) {
        if ($i < $kiek) {
            echo "<div style='background-color: red; display: block; width: {$value}px'>$value</div>";
        }
        $i++;
    }
    echo "<br>";
}

