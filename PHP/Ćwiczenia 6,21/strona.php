<?php
session_start();
if (!isset($_SESSION['log'])) {
  header('location: loguj.php');
  exit;
}
?>

