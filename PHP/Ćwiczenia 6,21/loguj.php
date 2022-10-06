<?php
session_start();
if (isset($_SESSION['log'])) {
  header('location: strona.php');
  exit();
} elseif (isset($_POST['nazwa']) && isset($_POST['haslo'])) {
    if ($_POST['nazwa'] == 'janek' && $_POST['haslo'] == 'jan23') {
        $_SESSION['log'] = $_POST['nazwa'];
        header('location: strona.php');
        exit();
      } else {
        echo "Nieprawidłowe dane logowania<br>";
      }
    }
    ?>