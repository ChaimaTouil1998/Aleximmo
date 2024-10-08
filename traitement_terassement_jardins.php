<?php
// Récupération des données du formulaire
$nom_prenom = $_POST['nom_prenom'];
$email = $_POST['email'];
$date = $_POST['date'];
$adresse = $_POST['adresse'];
$code_postal = $_POST['code_postal'];
$description = $_POST['description'];
$envergure_des_fouilles = $_POST['envergure_des_fouilles'];
$nature_sol = $_POST['nature_sol'];
$accessibilité_terrain = $_POST['accessibilité_terrain'];
$Terassement_Jardins ='Terassement Jardins';

// Construire le lien WhatsApp avec le numéro de téléphone spécifié
$numero_telephone = "23524474"; // Remplacez ceci par le numéro de téléphone réel
$lien_whatsapp = "https://wa.me/{$numero_telephone}?text=Bonjour,%20je%20suis%20{$nom_prenom}%20je%20vous%20contact%20à%20partir%20de%20votre%20site%20Aleximmo.%20Mon%20email%20est%20{$email}%20et%20je%20veux%20passer%20un%20devis%20pour%20le%20service%20:{$Terassement_Jardins}%20et%20je%20vous%20envoie%20mon%20adresse%20{$adresse}%20et%20pour%20résumer%20le%20problème%20{$description}%20,%20pour%20envergure%20des%20fouilles:%20{$envergure_des_fouilles},%20nature%20sol:%20{$nature_sol}%20,accessibilité%20terrain:%20{$accessibilité_terrain}%20.";
// pourRedirection vers le chat WhatsApp
header("Location: $lien_whatsapp");
exit();
?>
