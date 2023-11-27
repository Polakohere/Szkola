<!DOCTYPE html>
<html lang="pl-PL">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal społecznościowy</title>
    <link rel="stylesheet" href="styl5.css">
</head>

<body>
    <div class="wrapper1">
        <div class="sm1">
            <h1>Nasze osiedle</h1>
        </div>
        <div class="sm2">
            <?php
            $conn = mysqli_connect('localhost', 'root', '', 'portal');

            $qrr = "SELECT count(*) FROM dane";
            $result = mysqli_query($conn, $qrr);
            $number = "Liczba użytkowników portalu:&nbsp;";

            while ($row = mysqli_fetch_assoc($result)) {
                echo "<h5>$number{$row['count(*)']}</h5>";
            }

            ?>
        </div>
    </div>
    <div class="wrapper2">
        <div class="left">
            <h3>Logowanie</h3>
            <form method="post">
                login:<br>
                <input type="text" name="login"><br>
                hasło:<br>
                <input type="password" name="haslo"><br>
                <input type="submit" value="Zaloguj" name="btn">
            </form>
        </div>
        <div class="right">
            <h3>Wizytówka</h3>
            <?php
            if (!empty($_POST['login']) && !empty($_POST['haslo'])) {

                $qrrM = "SELECT haslo FROM uzytkownicy WHERE login=\"{$_POST['login']}\"";
                $res = mysqli_query($conn, $qrrM);

                $login_d_exist = "Login nie istnieje!";
                $passwd_incr = "Hasło nieprawidłowe!";

                if (mysqli_num_rows($res) == 0) {
                    echo "$login_d_exist";
                } else {
                    $passwd = $_POST['haslo'];
                    $passwd = sha1($passwd);
                    $login = $_POST['login'];

                    if (mysqli_num_rows($res) == 1) {
                        while ($row = mysqli_fetch_assoc($res)) {
                            if ($passwd == $row['haslo']) {

                                $qrrN = "select u.login, d.rok_urodz, d.przyjaciol, d.hobby, d.zdjecie from uzytkownicy u join dane d on d.id=u.id where u.login=\"{$login}\"";
                                $resN = mysqli_query($conn, $qrrN);

                                while ($row = mysqli_fetch_assoc($resN)) {
                                    $wiek = 2022 - $row['rok_urodz'];
                                    echo <<<LABEL
                                    "<div id='card'>";
                                    "<img src=\"{$row['zdjecie']}\" alt='osoba'>";
                                    "<h4>{$row['login']} ({$wiek})</h4>";
                                    "<p>hobby: {$row['hobby']}</p>";
                                    "<h1><img src='icon-on.png'>{$row['przyjaciol']}</h1>";
                                    "<a href='dane.html'><button>Więcej informacji</button></a>";
                                    "</div>";
                                LABEL;
                                }
                            } else
                                echo "$passwd_incr";
                        }
                    }
                }
            }
            mysqli_close($conn);
            ?>

        </div>
    </div>
    <div class="footer">
        Stronę wykonał: Kacper Piotrowski
    </div>
</body>

</html>