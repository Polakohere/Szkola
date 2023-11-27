<?php 
	$conn = mysqli_connect('localhost','root','','ogloszenia');
	$kat = $_POST['kat']; 
	$pkat = $_POST['pkat'];
	$title = $_POST['title'];
	$tr = $_POST['tr'];
	$ask = "INSERT INTO `ogloszenie` (`id`, `uzytkownik_id`, `kategoria`, `podkategoria`, `tytul`, `tresc`) VALUES
(NULL, 1, '$kat', '$pkat', '$title', '$tr')";	
	if (isset($kat) || isset($pkat) || isset($title) || isset($tr)) 
	{
		mysqli_query($conn,$ask);
		echo "Dane zostały dodane";
	}

	mysqli_close($conn);
?>