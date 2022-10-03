<!DOCTYPE HTML>
<html>
    <head>
    <title>przedmioty i oceny</title>
    <meta charset="utf-8">
    <style>
        table {width: 200px}
        table, tr, td {
            border: 1px solid;
            border-collapse: collapse;
        } 
    </style>
    </head>
<body>
    <table>
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
    echo '<tr><td>' . $kl . '</td><td>' . $x . '</td></tr>';
}; 
?>
</table>
</body>
</html>