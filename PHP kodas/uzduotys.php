<?php
$ceu = [
    "Italy" => "Rome",
    "Luxembourg" => "Luxembourg",
    "Belgium" => "Brussels",
    "Denmark" => "Copenhagen",
    "Finland" => "Helsinki",
    "France" => "Paris",
    "Slovakia" => "Bratislava",
    "Slovenia" => "Ljubljana",
    "Germany" => "Berlin",
    "Greece" => "Athens",
    "Ireland" => "Dublin",
    "Netherlands" => "Amsterdam",
    "Portugal" => "Lisbon",
    "Spain" => "Madrid",
    "Sweden" => "Stockholm",
    "United Kingdom" => "London",
    "Cyprus" => "Nicosia",
    "Lithuania" => "Vilnius",
    "Czech Republic" => "Prague",
    "Estonia" => "Tallin",
    "Hungary" => "Budapest",
    "Latvia" => "Riga",
    "Malta" => "Valetta",
    "Austria" => "Vienna",
    "Poland" => "Warsaw",
] ;

var_dump($ceu);

foreach ($ceu as $valst => $sost){
    echo "$valst sostine yra: $sost".'<br>';
}
//Surikiuoti salis abeceles tvarka//

ksort($ceu);
foreach ($ceu as $valst => $sost){
    echo "$valst sostine yra: $sost".'<br>';
}
//Spausdinti kas trecia pavadinima //
echo '1C<hr>';
$j = 0;
foreach ($ceu as $valst => $sost ){
    if ($j % 2=== 0){
        echo "$j] Valstybe: $valst Sostine: $sost";
    }
$j++;
}

echo '1D<hr>';
$raide = 'a';
foreach ($ceu as $valst => $sost ) {
    if (strpos($valst, $raide) !==false || strpos($sost, $raide) !==false);
    echo "Valstybe: $valst Sostine: $sost";
    }

echo '1E<hr>';
$ilgis = count($ceu);
$vidurys = ceil($ilgis / 2);
$pirmas = array_slice($ceu, $vidurys);
$antras = array_slice($ceu, 0, $vidurys);

foreach ($pirmas as $valst => $sost){
    echo "Valstybe: $valst Sostine: $sost";
}
foreach ($antras as $valst => $sost){
    echo "Valstybe: $valst Sostine: $sost";
}