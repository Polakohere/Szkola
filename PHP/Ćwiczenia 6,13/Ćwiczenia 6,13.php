<?php
$tekst = "Ala ma kota";
$tablica = array();
$tablica['Ala'] = "Ola";
$tablica['kota'] = "psa";
echo "Tekst zrodlowy przed zamiana: <b>".$tekst.'</b><br>';
foreach($tablica AS $nr => $wyraz)
   $tekst = str_replace($nr,$wyraz,$tekst);
echo "Tekst zrodlowy po zamianie: <b>".$tekst.'</b><br>';
?>