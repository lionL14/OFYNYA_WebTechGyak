<!DOCTYPE html>
<html lang="hu">
    <head>
        <meta charset="UTF-8">
        <title>Feldolgzó</title>
    </head>
    <body>
        <font style="font-size: 18pt;">
        <h2>HTML5 űrlap_LLVKNV</h2>

    <?php
    echo ("<strong>Név: </strong>" . $_POST['név'] . " <br><br>)
    echo ("<strong>PIN kód: </strong>" . $_POST['kod'] . " <br><br>)
    echo ("<strong>Gyümölcs: </strong>" . $_POST['gyumolcs'] . " <br><br>)
    echo ("<strong>Életkor: </strong>" . $_POST['eletkor'] . " <br><br>)
    echo ("<strong>Lábméret: </strong>" . $_POST['labmeret'] . " <br><br>)
    echo ("<strong>Önbizalom: </strong>" . $_POST['onbizalom'] . " <br><br>)
    ?>
    <a href="urlap5.html">Vissza az űrlapra</a>
        </font>
    </body>
</html>