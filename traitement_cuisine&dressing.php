<?php
// Récupération des données du formulaire
$nom_prenom = $_POST['nom_prenom'];
$email = $_POST['email'];
$date= $_POST['date'];
$adresse=$_POST['adresse'];
$code_postal=$_POST['code_postal'];
$description=$_POST['description'];
$hauteur=$_POST['hauteur']; // Correction : Récupération de la valeur de hauteur depuis le formulaire
$largeur=$_POST['largeur'];
$cuisine_dressing='cuisine et dressing';

// Construire le lien WhatsApp avec le numéro de téléphone spécifié
$numero_telephone = "23524474"; // Remplacez ceci par le numéro de téléphone réel
$lien_whatsapp = "https://wa.me/{$numero_telephone}?text=Bonjour,%20je%20suis%20{$nom_prenom}%20je%20vous%20contact%20à%20partir%20de%20votre%20site%20Aleximmo.%20Mon%20email%20est%20{$email}%20et%20je%20veux%20passer%20un%20devis%20pour%20le%20service%20:{$cuisine_dressing}%20et%20je%20vous%20envoie%20mon%20adresse%20{$adresse}%20et%20pour%20résumer%20le%20problème%20{$description}%20de%20hauteur:%20{$hauteur}%20et%20de%20largeur:%20{$largeur}.";

// Redirection vers le chat WhatsApp
header("Location: $lien_whatsapp");
exit();
?>
