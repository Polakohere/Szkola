<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="styl2.css">
	<title>Ogłoszenia drobne</title>
</head>
<body>
	<header>
		<h2>Ogłoszenia drobne</h2>
	</header>
	<nav>
		<h2>Ogłoszeniodawcy</h2>
		<?php
		$connect = mysqli_connect('localhost','root','','ogloszenia');
		$ask = "SELECT `uzytkownik`.`id`, `uzytkownik`.`imie`, `uzytkownik`.`nazwisko`, `uzytkownik`.`email`, `ogloszenie`.`tytul` FROM `uzytkownik` inner join `ogloszenie` ON `uzytkownik`.`id` = `ogloszenie`.`uzytkownik_id` WHERE `uzytkownik`.`id` < 4 GROUP by `uzytkownik`.`id`";
		$result = mysqli_query($connect, $ask);
		while ($line=mysqli_fetch_row($result)) 
		{
			echo '<h3>'.$line[0].' '. $line[1].' '.$line[2].'</h3>';
			echo '<p>'.$line[3].'</p>';
			echo '<p>Ogłoszenie: '.$line[4];
		}

		mysqli_close($connect);
		
		?>
	</nav>
	<main>
		<h2>Nasze kategorie</h2>
		<ul>
			<li>Książki</li>
			<li>Muzyka</li>
			<li>Multimedia</li>
		</ul>
		<img src="ksiazki.jpg" alt="uwolnij swoją książkę"">
		<table border=1>
			<tr>
				<th>Ile?</th><th>Koszt</th><th >Promocja</th>
			</tr>
			<tr>
				<th>1-40</th><th>1,20 PLN</th><th rowspan="2">Subskrybuj newsletter upust 0,30 PLN na ogłoszenie</th>
			</tr>
			<tr>
				<th>41 i więcej</th><th>0,70 PLN</th>
		</table>
	</main>
	<footer>
		Portal ogłoszenia drobne opracował: Kacper Piotrowski
	</footer>
</body>
</html>