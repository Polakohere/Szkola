<?php
session_start();
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Koszyk zakupów</title>
<meta charset="UTF-8">
</head>
<body>
<p><b>Lista artykułów</b></p>
<?php
if (isset($_POST['lista'])) {
    if (!empty($_SESSION['koszyk'])) {
    $koszyk = array_unique(
    array_merge(
    unserialize($_SESSION['koszyk']),
    $_POST['lista']
    )
    );
    $_SESSION['koszyk'] = serialize($koszyk);
    } else {
    $_SESSION['koszyk'] = serialize($_POST['lista']);
    }
    echo "<p>Wybrane produkty zostały umieszczone w koszyku</p>";
    }
    ?>
    <form action="lista.php" method="post">
    <p>Wybór produktu:</p>
    <p>
    <select name="lista[]" multiple="multiple" size = "9">
    <option value="Monitor"> Monitor</option>
    <option value="Drukarka"> Drukarka</option>
    <option value="Klawiatura"> Klawiatura</option>
    <option value="Myszka"> Myszka</option>
    <option value="Głośniki"> Głośniki</option>
    <option value="Kamera internetowa"> Kamera internetowa</option>
    <option value="Słuchawki"> Słuchawki</option>
    <option value="Stacja DVD"> Stacja DVD</option>
    <option value="Dysk twardy"> Dysk twardy</option>
    <option value="Pendrive"> Pendrive</option>
    <option value="Komputer"> Komputer</option>
    </select></p>
    <p>Wybierz produkty, trzymając wciśnięty klawisz Ctrl.</p>
    <p><input type="submit" value="Wyślij"></p>
    </form>
    <p><a href="koszyk.php">Przejdź do koszyka</a></p>
    </body>
    </html>