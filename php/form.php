<?php
if ($_SERVER["REQUEST_METHOD"]=== "POST"){
    $name = htmlspecialchars(trim($_POST["name"]));
    $email = htmlspecialchars(trim($_POST["email"]));
    $phone = htmlspecialchars(trim($_POST["phone"]));
    $adress = htmlspecialchars(trim($_POST["adress"]));
    $quantity = intval($_POST["quantity"]);

    if (!preg_match("/^[a-zA-Z\s]+$/", $name)){
        die("Nom valide");
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("email invalide");
            }
    
            if(!preg_match("/^\d{10}$/",$phone)) {
                die("numéro invalide");
            }
$data = "nom: $name\nEmail: $email\nTéléphone: $phone\nAdresse: $adress\nQuantité: $quantity\n";
file_put_contents("data.text", $data, FILE_APPEND);

echo "données enregistrées avec succès";
} else {
    die ("méthode non autorisée");
}
?>