<?php
if (!isset($_COOKIE ['odwiedz'])) {
  $odw = 1;
} else {
  $odw = intval($_COOKIE['odwiedz']) + 1;
}
setcookie("odwiedz", $odw, time()+60*60*24*365);
?>