<?php
// Récupération des données du formulaire
$nom_prenom = $_POST['nom_prenom'];
$date= $_POST['date'];
$description=$_POST['description'];


// Construire le lien WhatsApp avec le numéro de téléphone spécifié
$numero_telephone = "23524474"; // Remplacez ceci par le numéro de téléphone réel
$lien_whatsapp = "https://wa.me/{$numero_telephone}?text=Bonjour,%20je%20suis%20{$nom_prenom}%20je%20vous%20contact%20à%20partir%20de%20votre%20site%20Aleximmo.%20pour%20prendre%20un%20rendez-vous%20le%20{$date}%20concernant%20{$description}.";

// Redirection vers le chat WhatsApp
header("Location: $lien_whatsapp");
exit();
?>
