<!DOCTYPE HTML>
<html>
<head>
<title>Formularz rejestracyjny</title>
<meta charset="UTF-8">
<style>
#fo {
 font-weight: bold;
 font-size: 14pt;
}
p.wyk {
 font-weight: bold;
 font-size: 11pt;
}
</style>
</head>
<body>
<form action="skrypt_form2.php" method="post">
<p id="fo">Formularz kontaktowy:</p>
Nazwisko:<br>
<input type="text" name="nazw" value=" " size="30"><br>
Imię:<br>
<input type="text" name="im" value=" " size="30"><br>
Zawód:<br>
<input type="text" name="zaw" value=" " size="30"><br>
Adres e-mail:<br>
<input type="text" name="adr" value=" " size="30">
<p class="wyk">Wykształcenie:</p>
<input type="radio" value="podstawowe" 
name="wykszt" checked> Podstawowe<br>
<input type="radio" value="średnie" name="wykszt"> Średnie<br>
<input type="radio" value="wyższe" name="wykszt"> Wyższe<br><br>
<p class="wyk">Wybór języka:</p>
<select name="języki[]" multiple>
<option value="Język angielski">Język angielski</option>
<option value="Język niemiecki">Język niemiecki</option>
<option value="Język francuski">Język francuski</option>
<option value="Język włoski">Język włoski</option>
<option value="Język rosyjski">Język rosyjski</option>
<option value="Język hiszpański">Język hiszpański</option>
</select>
<p><input type="checkbox" name="opcje" maxlength="1">
Zgadzam się na przetwarzanie moich danych osobowych</p>
<input type="submit" value="Wyślij" name="wyslij">&nbsp; &nbsp; 
<input type="reset" value="Wyczyść" name="zeruj">
</form>
</body>
</html>
