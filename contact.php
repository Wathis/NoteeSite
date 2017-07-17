<?php
/**
 * Created by IntelliJ IDEA.
 * User: mathisdelaunay
 * Date: 18/07/2017
 * Time: 00:18
 */
// Start the session
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Notee</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
    <div class="menu">

        <div class="titleNotee">Notee</div>
        <div class="accueil">
            <a href="index.php" id="lienIndex">Accueil</a>
        </div>
        <div class="contact">
            <a href="index.php" class="">Contact</a>
            <div class="arrow-up"></div>
        </div>
    </div>

    <div class="contactDiv">

        <form action="" method="post" class="formulaireAdresseMail">

            <input name="userEmail" type="email" class="enterEmailContact" placeholder="Votre adresse mail">
            <textarea name="messageContact" class="enterMessageContact" cols="50" rows="10" placeholder="Votre message"></textarea>
            <input type="submit" class="contacter" value="CONTACTER">

        </form>

    </div>

</body>
</html>