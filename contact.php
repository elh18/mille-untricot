<?php

// Récupération des données soumises par le formulaire
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Connexion à la base de données
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérification de la connexion
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Insertion des données dans la table "messages"
$sql = "INSERT INTO messages (name, email, message) VALUES ('$name', '$email', '$message')";

if ($conn->query($sql) === TRUE) {
    echo "Record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Fermeture de la connexion à la base de données
$conn->close();

?>
