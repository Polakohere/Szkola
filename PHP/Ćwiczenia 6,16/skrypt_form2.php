<?php
echo "Dziękujemy! Rejestracja przebiegła pomyślnie.<br>";
echo "Wprowadzone dane:<br>";
echo "Nazwisko: " . trim($_POST['nazw']) . "<br>";
echo "Imię: " . trim($_POST['im']) . "<br>";
echo "Zawód: " . trim($_POST['zaw']) . "<br>";
echo "Adres e-mail: " . trim($_POST['adr']) . "<br>";
if (!isset($_POST['wykszt'])) {
 echo "Proszę zaznaczyć pole Wykształcenie";
} else {
 echo "Wykształcenie: " . trim($_POST['wykszt']) . "<br>";
}
echo "<p>Znajomość języków:</p>";
if (!empty($_POST['języki'])) {
 echo "<ul>";
 foreach ($_POST['języki'] as $wartosc) {
 echo "<li>$wartosc</li>";
 }
 echo "</ul>";
} else {
 echo "<p>".$_POST['nazw']." nie zna żadnego języka.</p>";
}
?>