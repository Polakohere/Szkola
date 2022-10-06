<?php
session_start();
if (isset($_SESSION['log'])) {
  unset($_SESSION['log']);
} else {
  header('location: loguj.php');
  exit;
?>  
