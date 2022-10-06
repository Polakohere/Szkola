<?php
$dzien_tyg = date('l');
$dzien_pl = array(
    'Monday' => 'Poniedziałek',
    'Tuesday' => 'Wtorek',
    'Wednesday' => 'Sroda',
    'Thursday' => 'Czwartek',
    'Friday' => 'Piątek',
    'Saturday' => 'Sobota',
    'Sunday' => 'Niedziela');


echo "Dzisiaj jest ".$dzien_pl[$dzien_tyg];
?>