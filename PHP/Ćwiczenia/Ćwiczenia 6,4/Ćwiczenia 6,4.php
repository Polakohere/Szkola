<!DOCTYPE HTML>
<html>
    <head>
    <title>przedmioty i oceny</title>
    <meta charset="utf-8">
    </head>
<body>
    <b>oceny<br></b>
<?php
    $oceny = array(
        "polski" => "4",
        "matematyka" => "3",
        "geografia" => "4",
        "historia" => "5",
        "angielski" => "5"
    );
foreach ($oceny as $kl => $x) {
    echo "$kl = $x <br>"; 
}; 
?>
</body>
</html>