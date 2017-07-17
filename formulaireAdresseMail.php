<?php
// Start the session
session_start();
?>
<?php
if (isset($_POST["userEmail"])) {
    $email = $_POST["userEmail"];
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION["error"] = "valide";
    } else {
        $_SESSION["error"] = "novalide";
    }
    header('Location: index.php');
    exit;

} else {
    echo "Erreur d'email introuvable";
}