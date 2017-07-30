<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Notee</title>
    <link rel="stylesheet" href="./css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="js/index.js"></script>
    <link rel="icon" href="./img/logo-site.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Doppio+One" rel="stylesheet">
</head>

<body>

    <div class="navBarMobile" >
        <div class="itemNav is-active">
            <div class="accueilShortcut"><a href="index.php"><img src="img/home.svg" height="30"></a></div>
        </div>

        <div class="itemNav">
            <div class="contactShortcut"><a href="page/contact.php"><img src="img/email.svg" height="30"></a></div>
        </div>
    </div>

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
    <div class="loaderContainer">
        <div class="loader"></div>
    </div>

    <div class="container">
        <div class="landingPage">

            <div id="landingPageGauche" class="landingPageGauche">
                <img src="./img/iPhoneNotee.svg" alt="Salut" class="photoiPhone">

                <p class="bientotDisponible">Bientôt sur l'AppStore</p>
            </div>

            <div id="landingPageDroite" class="landingPageDroite">

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
                    <img src="./img/document_logo.svg" alt="document" height="100" id="logo-document" class="logo-info">
                </div>

                <div class="right-part">
                    <div id="message-document" class="message-information">Mettez en ligne vos fiches de <br /> révision ou prise de note</div>
                </div>
            </div>


            <div class="second-information">
                <div class="left-part">
                    <div id="message-network" class="message-information-milieu">Consultez les fiches ajoutées <br />récement par vos amis</div>
                </div>

                <div class="right-part">
                    <img id="logo-network" alt="network" src="./img/network_logo.svg" alt="document" height="100" class="logo-info">
                </div>
            </div>


            <div class="third-information">
                <div class="left-part">
                    <img id="logo-podium" alt="podium" src="./img/podium_logo.svg" alt="document" height="100" class="logo-info">
                </div>

                <div class="right-part">
                    <div id="message-podium" class="message-information">Accédez aux meilleurs fiches <br/> de révisions du moment</div>
                </div>
            </div>
        </div>
    </div>

    <footer>

        <div class="footer-copyright">
            <a href="http://wathis.jimdo.com" target="_blank">©Copyright Wathis 2017</a>
        </div>

    </footer>

</body>
</html>