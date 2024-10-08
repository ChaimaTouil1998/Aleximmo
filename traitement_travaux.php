<?php
// Récupération des données du formulaire
$nom_prenom = $_POST['nom_prenom'];
$adresse = $_POST['adresse'];
$num_tel = $_POST['num_tel'];
$email = $_POST['email'];
$travaux = 'travaux';
$date = $_POST['date'];
$code_postal = $_POST['code_postal'];
$description = $_POST['description'];
$rénovation_de_la_cuisine = isset($_POST['rénovation_de_la_cuisine']) ? $_POST['rénovation_de_la_cuisine'] : '';
$réfevtion_de_la_salle_de_bain = isset($_POST['réfevtion_de_la_salle_de_bain']) ? $_POST['réfevtion_de_la_salle_de_bain'] : '';
$peinture_des_murs = isset($_POST['peinture_des_murs']) ? $_POST['peinture_des_murs'] : '';
$installation_de_nouveau_de_revêtement_de_sol = isset($_POST['installation_de_nouveau_de_revêtement_de_sol']) ? $_POST['installation_de_nouveau_de_revêtement_de_sol'] : '';
$Remplacement_des_fenêtres_des_portes = isset($_POST['Remplacement_des_fenêtres_des_portes']) ? $_POST['Remplacement_des_fenêtres_des_portes'] : '';

// Construire le lien WhatsApp avec le numéro de téléphone spécifié
$numero_telephone = "23524474"; // Remplacez ceci par le numéro de téléphone réel
$lien_whatsapp = "https://wa.me/{$numero_telephone}?text=Bonjour,%20je%20suis%20{$nom_prenom}%20je%20vous%20contact%20à%20partir%20de%20votre%20site%20Aleximmo.%20Mon%20email%20est%20{$email}%20et%20je%20veux%20passer%20un%20devis%20pour%20le%20service%20:{$travaux}%20,%20je%20vous%20envoie%20mon%20adresse%20{$adresse}%20,mon num%20pour%20plus%20de%20détails:%20{$rénovation_de_la_cuisine},%20{$réfevtion_de_la_salle_de_bain},%20{$peinture_des_murs},%20{$installation_de_nouveau_de_revêtement_de_sol},%20{$Remplacement_des_fenêtres_des_portes}.";

// Redirection vers le chat WhatsApp
header("Location: $lien_whatsapp");
exit();
?>
