<!DOCTYPE html>
<?php 
$czas = date("Y-m-d G:i:s");
setcookie("wizyta", $czas, time()+3600);
?>
<html>
<body>
<?php 
if (isset($_COOKIE['wizyta'])) {
  $ostatnia = $_COOKIE['wizyta']; 
  echo "Witamy ponownie! <br> Ostatni raz odwiedziłeś nas: " . $ostatnia;
} else {
  echo "Witamy na naszej stronie!";
}
?>
<p><strong>Uwaga:</strong> Potrzebne może być odświeżenie strony.</p>
</body>
</html>