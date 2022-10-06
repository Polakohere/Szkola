<?php
$tab = array(0,1,2,3,4,5,6,7,8,9,10);
echo "Liczby parzyste: <br>";
foreach($tab as $i) {
    if($i%2==0) {
    echo("$i \n");    
    }
}
?>