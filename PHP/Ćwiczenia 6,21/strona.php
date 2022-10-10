<?php
session_start();
if (!isset($_SESSION['log'])) {
<<<<<<< HEAD
   header('location: loguj.php');
  exit;
=======
   header('location: loguj.php');
exit;
>>>>>>> d05290d8d4c71148ea969b5a5a4dd2f0067081b5
}
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Strona główna</title>
<meta charset="UTF-8">
</head>
<body>
<?php
$imie = ucfirst($_SESSION['log']);
echo "Witaj " . $imie;
?>
<p>Jesteś na stronie głównej.</p>
<p>Przed opuszczeniem strony wyloguj się!</p>
<a href="wyloguj.php">Wyloguj</a>
</body>
</html>