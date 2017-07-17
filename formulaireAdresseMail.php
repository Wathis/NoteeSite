<?php
// Start the session
session_start();
?>
<?php



if (isset($_POST["userEmail"])) {
    $email = $_POST["userEmail"];
    $dsn = 'mysql:dbname=notee;host=localhost';
    $user = 'root';
    $password = 'root';
    try {
        $bdd = new PDO($dsn, $user, $password);
        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $bdd->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    } catch (PDOException $e) {
        echo 'Échec lors de la connexion : ' . $e->getMessage();
    }
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION["error"] = "valide";
        $request = $bdd->prepare('insert into emails_users (email) values (?) ');
        try {
            $request->execute(array($email));
        } catch (PDOException $e) {
            echo 'error: ' . $e->getMessage();
            exit;
        }
    } else {
        $_SESSION["error"] = "";
    }
    header('Location: index.php');
    exit;

} else {
    echo "Erreur d'email introuvable";
}