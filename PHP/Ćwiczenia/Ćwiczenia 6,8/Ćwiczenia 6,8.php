<?php
    $klucz = array  ("l1" => "2",
                     "l2" => "4" , 
                     "l3" => "6", 
                     "l4" => "8", 
                     "l5" => "10",
                     "l6" => "12",
                     "l7" => "14",
                     "l8" => "16",
                     "l9" => "18",
                     "l10" => "20",
                     "l11" => "22",
                     "l12" => "24",
                     "l13" => "24",
                     "l14" => "26",
                     "l15" => "28",
);
    foreach($klucz as $x => $x_wartosc) {
        if($x_wartosc%3==0 && $x_wartosc%4==0){
        echo "Klucz=". $x . ", Wartosc=" . $x_wartosc;
        echo "<br>";
        }
    }
?>