<?php
$dzien = date('d');
$dzien_tyg = date('l');
$miesiac = date('n');
$rok = date('Y');

$dzien_pl = array(
    'Monday' => 'Poniedziałek',
    'Tuesday' => 'Wtorek',
    'Wednesday' => 'Sroda',
    'Thursday' => 'Czwartek',
    'Friday' => 'Piątek',
    'Saturday' => 'Sobota',
    'Sunday' => 'Niedziela');

$miesiace_pl = array(
    1 => 'stycznia', 'lutego', 'marca', 'kwietnia', 'maja', 'czerwca','lipca','sierpnia','września','października','listopada','grudnia'
);
echo $dzien_pl[$dzien_tyg]. ", ".$dzien." ".$miesiace_pl[$miesiac]." ".$rok."r. ";
?>