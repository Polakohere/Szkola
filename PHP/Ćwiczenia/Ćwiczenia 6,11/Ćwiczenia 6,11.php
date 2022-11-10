<?php
if(date('L')) {$dni='366';} else{$dni='365';}
        $dzienroku = date('z');
        $pozostalo = $dni-$dzienroku;
        echo 'do końca roku pozostało '.$pozostalo.' dni.','<br>';
        $x = ($dzienroku - $dni) * (-1);
        $uplynelo = $dni - $x;
        echo 'od początku roku mineło '.$uplynelo.' dni.';
?>      