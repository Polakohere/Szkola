<?php
if (isset($_POST['komentarz'])) {
 $tekst = substr($_POST['komentarz'], 0, 255);
 $tekst = strip_tags($tekst) . "\n";
 
 if (!$op = fopen('opinie.txt', 'a')) {
 echo "Błąd!. Nie można otworzyć pliku opinie.txt";
 } else {
    if (fwrite($op, $tekst) === false) {
        echo "Dodanie komentarza nie powiodło się";
        }
        }
       }
       ?>