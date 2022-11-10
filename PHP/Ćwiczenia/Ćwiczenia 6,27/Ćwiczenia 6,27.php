<?php
$do_bazy = mysqli_connect('localhost', 'root', '', 'ksiegarnia');
if (!$do_bazy) {
  exit("Błąd połączenia z serwerem MySQL.");
}
$zapytanie = mysqli_query($do_bazy, "SELECT * FROM Klient WHERE Nazwisko  
= 'Kowalski'");
if (!$zapytanie === true) {
  mysqli_close();
  exit("Błąd w zapytaniu<br>");
}
while ($tab = mysqli_fetch_array($zapytanie)) {
  echo $tab['nazwisko'] . " " . $tab['imie'];
  echo "<br>";
}
mysqli_close($do_bazy);
?>