<!DOCTYPE HTML>
<html>
<head>
<title>Skrypt PHP</title>
<meta charset="UTF-8">
</head>
<body>
<?php
$imie = "Anna";
$jezyk1 = "PHP";
$jezyk2 = "JavaScript";
$tekst = <<<TX
  Mam na imię $imie.
  Uczę się programować w języku $jezyk1.
  Umiem już programować w $jezyk2.
TX;
echo $tekst;
?>
</body>
</html>