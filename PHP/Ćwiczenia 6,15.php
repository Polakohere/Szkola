
        <html>
       <head>
       <title>Opinie użytkowników</title>
       <meta charset="UTF-8">
       </head>
       <body>
       <div>
       <form action="skrypt1.php" method="post">
       <p><b>Dodaj swój komentarz na temat globalnego ocieplenia</b><br>
       (Maksymalnie 255 znaków)</p>
       <textarea name="komentarz" rows="6" cols="50" 
       wrap="virtual"></textarea><br>
       <input type="submit" value="Wyślij">
       </div>
       </form>
       <b>Dodane opinie:</b>
       <div>
       <?php
       $opinie = '';
       if (file_exists('./opinie.txt')) {
        $opinie = file_get_contents('./opinie.txt');
        $opinie = nl2br($opinie);
       }
       if ($opinie != '') {
        echo $opinie;
       } else {
        echo "Brak opinii na temat zmian klimatu.";
       }
       ?>
       </div>
       </body>
       </html>       