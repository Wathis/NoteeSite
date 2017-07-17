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
</head>
<body>

    <div class="menu">

        <div class="titleNotee">Notee</div>
        <a href="index.html" class="">Accueil</a>
        <a href="#" class="">Contact</a>
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
                <input type="submit" value="OBTENIR">
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