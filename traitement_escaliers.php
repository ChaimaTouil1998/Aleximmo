<?php
// Récupération des données du formulaire
$nom_prenom = $_POST['nom_prenom'];
$email = $_POST['email'];
$date= $_POST['date'];
$adresse=$_POST['adresse'];
$code_postal=$_POST['code_postal'];
$description=$_POST['description'];
$type=$_POST['type'];
$hauteur=$_POST['hauteur'];
$largeur=$_POST['largeur'];
$profondeur=$_POST['profondeur'];
$nb_marche=$_POST['nb_marche'];
$escaliers='escaliers';

// Construire le lien WhatsApp avec le numéro de téléphone spécifié
$numero_telephone = "23524474"; // Remplacez ceci par le numéro de téléphone réel
$lien_whatsapp = "https://wa.me/{$numero_telephone}?text=Bonjour,%20je%20suis%20{$nom_prenom}%20je%20vous%20contact%20à%20partir%20de%20votre%20site%20Aleximmo.%20Mon%20email%20est%20{$email}%20et%20je%20veux%20passer%20un%20devis%20pour%20le%20service%20:{$escaliers}%20et%20je%20vous%20envoie%20mon%20adresse%20{$adresse},%20les%20caractéristiques%20pour%20les%20escaliers%20:%20type:%20{$type},%20hauteur:%20{$hauteur},largeur:%20{$largeur},profondeur:{$profondeur}%20,nombre%20de%20marche:%20{$nb_marche}et%20pour%20résumer%20le%20problème%20{$description}.";

// Redirection vers le chat WhatsApp
header("Location: $lien_whatsapp");
exit();
?>
