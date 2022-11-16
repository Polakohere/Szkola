<!DOCTYPE HTML>
<html>
<head>
<title>Odczyt danych z tabeli Klient</title>
<meta charset="UTF-8">
</head>
<body>
<?php
$do_bazy = mysqli_connect('localhost', 'root', '', 'ksiegarnia');
if (!$do_bazy) {
  echo "Błąd połączenia z serwerem MySQL.<br>";
  ?>
  </body>
  </html>
  <?php
  exit;
} else {
  $zapytanie = mysqli_query($do_bazy, 'SELECT * FROM Klient');
  if (!$zapytanie) {
    mysqli_close();
    echo "Błąd w zapytaniu<br>";
    ?>
    </body>
    </html>
    <?php
    exit;
  } else {
    ?>
    <table>
    <tr>
    <td>Nazwisko</td>
    <td>Imię</td>
    <td>Kod pocztowy</td>
    <td>Miejscowość</td>
    <td>Ulica</td>
    <td>Nr domu</td>
    <td>PESEL</td>
    <td>Telefon</td>
    <td>Adres e-mail</td>
    <td>Id klienta</td>
    </tr>
    <?php
    while ($wiersze = mysqli_fetch_row($zapytanie)) {
      echo "<tr>";
      echo "<td>$wiersze[0]</td>";
      echo "<td>$wiersze[1]</td>";
      echo "<td>$wiersze[2]</td>";
      echo "<td>$wiersze[3]</td>";
      echo "<td>$wiersze[4]</td>";
      echo "<td>$wiersze[5]</td>";
      echo "<td>$wiersze[6]</td>";
      echo "<td>$wiersze[7]</td>";
      echo "<td>$wiersze[8]</td>";
      echo "<td>$wiersze[9]</td>";
      echo "</tr>";
    }
    ?>
    </table>
    <?php
    mysqli_close($do_bazy);
  }
}
?>
</body>
</html>