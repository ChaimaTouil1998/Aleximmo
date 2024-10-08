<?php
// Récupération des données du formulaire
$nom_prenom = $_POST['nom_prenom'];
$email = $_POST['email'];
$date= $_POST['date'];
$adresse=$_POST['adresse'];
$surface=$_POST['surface'];
$description=$_POST['description'];
$num_tel=$_POST['num_tel'];
$Terrains_Omni_Sport='Terrains Omni Sport';
$terrains_bascketball = isset($_POST['bascketball']) ? $_POST['bascketball'] : '';
$terrains_handball = isset($_POST['handball']) ? $_POST['handball'] : '';
$terrains_volleyball = isset($_POST['volleyball']) ? $_POST['volleyball'] : '';
$Terrains_Foot = isset($_POST['Foot']) ? $_POST['Foot'] : '';
$Terrains_tennis = isset($_POST['tennis']) ? $_POST['tennis'] : '';

// Construire le lien WhatsApp avec le numéro de téléphone spécifié
$numero_telephone = "23524474"; // Remplacez ceci par le numéro de téléphone réel
$lien_whatsapp = "https://wa.me/{$numero_telephone}?text=Bonjour,%20je%20suis%20{$nom_prenom}%20je%20vous%20contact%20à%20partir%20de%20votre%20site%20Aleximmo%20mon%20numéro%20de%20téléphone: {$num_tel}.%20Mon%20email%20est%20{$email}%20et%20je%20veux%20passer%20un%20devis%20pour%20le%20service%20:{$Terrains_Omni_Sport}%20pour%20faire%20un%20terrains%20sportif%20de%20{$terrains_bascketball}%20,%20{$terrains_handball}%20,%20{$terrains_volleyball}%20,%20{$Terrains_Foot}%20,%20{$Terrains_tennis}%20de%20surface%20{$surface}m².";

// Redirection vers le chat WhatsApp
header("Location: $lien_whatsapp");
exit();
?>
