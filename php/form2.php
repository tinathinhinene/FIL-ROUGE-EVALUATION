<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = htmlspecialchars(trim($_POST["name"]));
    $firstname = htmlspecialchars(trim($_POST["firstname"]));
    $email = htmlspecialchars(trim($_POST["email"]));
    $phone = htmlspecialchars(trim($_POST["phone"]));
    $demande = htmlspecialchars(trim($_POST["demande"]));
    $quantity = intval($_POST["quantity"]);

    if (!preg_match("/^[a-zA-Z\s]+$/", $name)) {
        die("Non valide");
    }

    if (!preg_match("/^[a-zA-Z\s]+$/", $firstname)) {
        die("Non valide");
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("email invalide");
    }

    if (!preg_match("/^\d{10}$/", $phone)) {
        die("numéro invalide");
    }

    if (empty($demande)) {
        die("demande invalide");
    }
     
    $data = "nom: $name\nPrénom : $firstname\nEmail: $email\nTéléphone: $phone\nDemande: $demande\nQuantité: $quantity\n";
    $file = 'data.txt';

    if(file_put_contents($file, $data, FILE_APPEND | LOCK_EX === false)){
        die("erreur d'enregistrement des données");
    }
    echo "données enregistrées avec succès";
} else {
    die("méthode non autorisée");
}
?>