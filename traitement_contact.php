<?php
// Récupération des données du formulaire
$email = $_POST['email'];
$nom = $_POST['nom'];
$tel = $_POST['tel'];

// Construire le lien WhatsApp avec le numéro de téléphone spécifié
$numero_telephone = "23524474"; // Remplacez ceci par le numéro de téléphone réel
$lien_whatsapp = "https://wa.me/{$numero_telephone}?text=Bonjour,%20je%20suis%20{$nom}%20je%20vous%20contact%20à%20partir%20de%20votre%20site%20Aleximmo.%20Mon%20email%20est%20{$email}%20et%20mon%20numér%20detéléphone%20est%{$tel}.";

// Redirection vers le chat WhatsApp
header("Location: $lien_whatsapp");
exit();
?>
