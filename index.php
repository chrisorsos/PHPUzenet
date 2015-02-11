<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>Üzenet érkezett</h1>

       
            <form method="POST"action="uzenet.php">
                Név:<br>
                <input type="text" name="nev">
                <br>
                Telefon:<br>
                <input type="text" name="telefon"><br>
                E-mail:<br>
                <input type="text" name="e-mail">
                <br>
                Üzenet:<br>
                <textarea name="uzenet" rows="5" cols="50"></textarea>

                <input type="Submit" value="Küld">
            </form>

    </body>
</html>