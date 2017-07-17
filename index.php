<?php
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
            <div class="arrow-up"></div>
        </div>
        <div class="contact">
            <a href="contact.php" class="">Contact</a>
        </div>
    </div>

    <div class="landingPage">

        <div class="landingPageGauche">

            <img src="iPhoneTopSVG.svg" alt="Salut" class="photoiPhone">

            <p class="bientotDisponible">Bientôt sur l'AppStore</p>

        </div>

        <div class="landingPageDroite">

            <div class="messageNotee">Avec <span class="wordNotee">Notee</span>, consultez de<br /> nombreuses fiches de <br /> révisions par matières</div>

            <form action="formulaireAdresseMail.php" class="formulaireAdresseMail" method="post">
                <input name="userEmail" type="email" class="enterEmail" placeholder="Votre adresse mail">
                <input type="submit" class="obtenir" value="OBTENIR">
            </form>
            <?php
                if (isset($_SESSION["error"])) {
                    $error =  $_SESSION["error"];
                    if ($error == "valide") {
                        echo "<br /> Email sauvegardé";
                        session_unset();
                    } else {
                        echo $error . ' zd';
                    }
                }
            ?>
        </div>
    </div>

</body>
</html>