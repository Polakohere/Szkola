<?php
$do_bazy = mysqli_connect('localhost', 'root', '', 'ksiegarnia');
if (!$do_bazy) {
  exit("Błąd połączenia z serwerem MySQL.");
}
$dodaj = mysqli_query($do_bazy, "INSERT INTO Klient VALUES('Lisek',  
'Anna', '34-100', 'Wadowice', 'Lwowska', '11', '95031203267', 
'936789453', 'ania@gmail.com', NULL)");
if (!$dodaj === true) {
  mysqli_close($do_bazy);
  exit("Błąd w zapytaniu<br>");
}
$ile = mysqli_affected_rows($do_bazy);
echo "Liczba rekordów dodanych do tabeli Klient wynosi: $ile<br>";
mysqli_close($do_bazy);
?>