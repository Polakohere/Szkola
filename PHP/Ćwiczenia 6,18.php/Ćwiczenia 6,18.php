<!DOCTYPE HTML>
<html>
<head>
<title>Dane_user</title>
<meta charset="UTF-8">
</head>
<body>
<form action="rejestracja.php" method="post">
Podaj nazwisko i imię:<br>
<input type="text" name="nazw" value=" " size="35">
<p><input type="submit" value="Wyślij" name="wyslij"></p>
</form>
<?php
} else {
  if (isset($_POST['nazw'])) {
    setcookie('dane', $_POST['nazw'], time()+60*60*24*365);
    echo "<p>Dziękujemy za wprowadzenie danych.</p>";
  } else {
    echo "<p>Witamy po raz kolejny! " . $_COOKIE['dane'] . "</p>";
  }
}
?>
</body>
</html>