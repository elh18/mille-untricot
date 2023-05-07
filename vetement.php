<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "votre-email@exemple.com";
    $subject = "Nouvelle demande de vêtement";
    $garmentType = test_input($_POST["garment-type"]);
    $color = test_input($_POST["color"]);
    $taille = test_input($_POST["taille"]);
    $typeLaine = test_input($_POST["type_laine"]);
    $autreLaine = test_input($_POST["autre_laine"]);
    $email = test_input($_POST["email"]);
    $message = "Nouvelle demande de vêtement\n\n" . 
        "Type de vêtement : $garmentType\n" .
        "Couleur : $color\n" .
        "Taille : $taille\n" .
        "Matériau : $typeLaine\n" .
        "Autre détails/précisions : $autreLaine\n" .
        "Adresse e-mail : $email\n";
    $headers = "From: aichablf.pro@gmail.com" . "\r\n" .
        "Reply-To: $email" . "\r\n" .
        "X-Mailer: PHP/" . phpversion();
    if (mail($to, $subject, $message, $headers)) {
        echo "Merci pour votre demande. Nous vous contacterons sous peu.";
    } else {
        echo "Une erreur est survenue lors de l'envoi de votre demande. Veuillez réessayer plus tard.";
    }
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
