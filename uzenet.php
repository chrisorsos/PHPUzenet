<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>Üzenet érkezett</h1>
        Név: <?php echo $_POST["nev"]; ?><br>
        Telefon: <?php echo $_POST["telefon"]; ?><br>
        E-mail: <?php echo $_POST["e-mail"]; ?><br>
        Üzenet: <?php echo $_POST["uzenet"]; ?><br>

        <a href="index.php">Vissza</a>


    </body>
</html>