<?php
$fileList = glob('6.14/*');

echo 'pliki<br>';
foreach($fileList as $filename){

    if(is_file($filename)){

        echo $filename, '<br>'; 

    }   

}
echo 'katalogi<br>';
foreach($fileList as $filename){

   if(is_dir($filename)){

       echo $filename, '<br>'; 

   }   

}
?>