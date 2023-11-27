<!DOCTYPE html>
<html lang="pl">
<head>
    <head>
    <meta charset="UTF-8">
    <title>Sierpniowy kalendarz</title>
    <link rel="stylesheet" href="styl5.css">
</head>

<body>
    <?php
        mysqli_connect('localhost', 'root', "", 'kalendarz');
    ?>
    <header>
        <section id="baner_1">
            <h1>Organizer: SIERPIEŃ</h1>
        </section>
        <section id="baner_2">
            <form action="organizer.php" method="post">
                <label>Zapisz wydarzenie:
                    <input type="text" name="wpis" />
                </label>
</body>
</html>
