<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="styl1.css">
	<title>Portal ogłoszeniowy</title>
</head>
<body>
	<div id="baner">
		<h1>Portal Ogłoszeniowy</h1>
	</div>
	<div id="pl">
		<h2>Kategorie ogłoszeń</h2>
		<ol>
			<li>Książki</li>
			<li>Muzyka</li>
			<li>Filmy</li>
		</ol>
		<img src="ksiazki.jpg" alt="Kupię / sprzedam książkę">
		<table>
			<tr>
				<td>Lista ogłoszeń</td><td>Cena ogłoszenia</td><td>Bonus</td>
			</tr>
			<tr>
				<td>1 - 10</td><td>1 PLN</td><td rowspan="3" >Subskrypcja newslettera to upust 0,20 PLN na ogłoszenie</td>
			</tr>
			<tr>
				<td>11 - 50</td><td>0,80 PLN</td>
			</tr>
			<tr>
				<td>51 i więcej</td><td>0,60 PLN</td>
			</tr>
		</table>
	</div>
	<div id="pp">
		<h2>Ogłoszenia kategorii książki</h2>
		<?php 
			$con = mysqli_connect('localhost','root','','ogloszenia');
			$ask = "SELECT id, tytul, tresc from ogloszenie WHERE kategoria = 1";
			$ask1 = "SELECT telefon FROM uzytkownik INNER JOIN ogloszenie ON uzytkownik.id = ogloszenie.uzytkownik_id ";
			$wynik = mysqli_query($con,$ask);
			$wynik1= mysqli_query($con,$ask1);

			while ($wiersz = mysqli_fetch_row($wynik)) 
			{
				$wiersz1 = mysqli_fetch_row($wynik1);
				echo "<h3>".$wiersz[0]." ".$wiersz[1]."</h3>";
				echo "<p>".$wiersz[2]."</p>";
				echo "<p>"."Telefon kontaktowy: ".$wiersz1[0];
			}
			mysqli_close($con);
		 ?>
	</div>
	<div id="stopka">Portal ogłoszeniowy opracował: Kacper Piotrowski 5i</div>
</body>
</html>