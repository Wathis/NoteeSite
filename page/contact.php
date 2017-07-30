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
    <link rel="stylesheet" href="../css/style.css">
    <link rel="icon" href="../img/logo-site.png">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="../js/index.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <div class="menu">

        <div class="titleNotee">Notee</div>
        <div class="accueil">
            <a href="../index.php" id="lienIndex">Accueil</a>
        </div>
        <div class="contact">
            <a href="./contact.php" class="">Contact</a>
            <div class="arrow-up"></div>
        </div>
    </div>

    <div class="navBarMobile" >
        <div class="itemNav">
            <div class="accueilShortcut"><a href="../index.php"><img src="../img/home.svg" height="30"></a></div>
        </div>

        <div class="itemNav is-active">
            <div class="contactShortcut"><a href="contact.php"><img src="../img/email.svg" height="30"></a></div>
        </div>
    </div>

    <div class="contactDiv">


        <div class="nousContacter">Nous contacter</div>

        <form action="" method="post" class="formulaireDeContact">

            <input name="userEmail" type="email" class="enterEmailContact" placeholder="Votre adresse mail">
            <textarea name="messageContact" class="enterMessageContact" cols="50" rows="10" placeholder="Votre message"></textarea>
            <input type="submit" class="contacter" value="CONTACTER">

        </form>

    </div>

     <footer>


        <div class="footer-copyright">
            <a href="http://wathis.jimdo.com" target="_blank">©Copyright Wathis 2017</a>
        </div>
    </footer>

</body>
</html>