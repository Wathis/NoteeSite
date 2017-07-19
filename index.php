<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Notee</title>
    <link rel="stylesheet" href="css/style.css">
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
            <a href="page/contact.php" class="">Contact</a>
        </div>
    </div>

    <div class="landingPage">

        <div class="landingPageGauche">

            <img src="../img/iPhoneTopSVG.svg" alt="Salut" class="photoiPhone">

            <p class="bientotDisponible">Bientôt sur l'AppStore</p>

        </div>

        <div class="landingPageDroite">

            <div class="messageNotee">Avec <span class="wordNotee">Notee</span>, consultez de<br /> nombreuses fiches de <br /> révisions par matières</div>

            <form action="page/formulaireAdresseMail.php" class="formulaireAdresseMail" method="post">
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
                        echo $error;
                    }
                }
            ?>
        </div>
    </div>

    <div class="information">

        <div class="first-information">
            <div class="left-part">
                <img src="../img/document_logo.svg" alt="document" height="100" class="logo-info">
            </div>

            <div class="right-part">
                <div class="message-information">Mettez en ligne vos fiches de <br /> révision ou prise de note</div>
            </div>
        </div>


        <div class="second-information">
            <div class="left-part">
                <div class="message-information-milieu">Consultez les fiches ajoutées <br />récement par vos amis</div>
            </div>

            <div class="right-part">
                <img src="../img/network_logo.svg" alt="document" height="100" class="logo-info">
            </div>
        </div>


        <div class="third-information">
            <div class="left-part">
                <img src="../img/podium_logo.svg" alt="document" height="100" class="logo-info">
            </div>

            <div class="right-part">
                <div class="message-information">Accédez aux meilleurs fiches <br/> de révisions du moment</div>
            </div>
        </div>

    </div>


    <footer>


        <div class="footer-copyright">
            Site web réalisé par <a href="http://wathis.jimdo.com" target="_blank">Mathis DELAUNAY</a><br />
            ©Copyright Wathis 2017
        </div>

    </footer>

</body>
</html>