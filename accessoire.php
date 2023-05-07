<?php
// Récupération des données du formulaire
$product = $_POST['product'];
$color = $_POST['color'];
$size = $_POST['size'];
$type_laine = $_POST['type_laine'];
$autre_laine = $_POST['autre_laine'];
$email = $_POST['email'];

// Destinataire de l'e-mail
$to = 'aichablf.pro@gmail.com';

// Sujet de l'e-mail
$subject = 'Nouvelle demande de création d\'accessoire';

// Message de l'e-mail
$message = "Un utilisateur a soumis une demande de création d'accessoire :\n\n";
$message .= "Produit : $product\n";
$message .= "Couleur : $color\n";
$message .= "Taille : $size\n";
$message .= "Type de laine : $type_laine\n";
$message .= "Autre détails/précisions : $autre_laine\n";
$message .= "E-mail : $email\n";

// Envoi de l'e-mail
$headers = "From: $email\r\n";
$headers .= "Reply-To: $email\r\n";
$headers .= "X-Mailer: PHP/".phpversion();
mail($to, $subject, $message, $headers);

// Redirection vers une page de confirmation
header('Location: confirmation.html');
?>
