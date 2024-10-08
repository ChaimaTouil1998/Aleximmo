<?php
require_once('TCPDF/tcpdf.php');

// Récupération des données du formulaire
$nom_prenom_client = $_POST['nom_prenom_client'];
$email_client = $_POST['email_client'];
$tel = $_POST['tel_client'];
$adresse_fact=$_POST['adresse_fact'];
$type_bat=$_POST['type_bat'];
$marque_clim=$_POST['marque_clim'];
$nb=$_POST['nb'];
$config=$_POST['config'];
$contrainte=$_POST['contrainte'];
$duree=$_POST['duree'];
$montant=$_POST['montant'];

// Configuration de la connexion à la base de données
$servername = "localhost"; // Nom de l'hôte
$username = "root"; // Nom d'utilisateur de la base de données
$password = ""; // Mot de passe de la base de données
$dbname = "ms_aleximmo"; // Nom de la base de données

// Création de la connexion
$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// Requête d'insertion des données dans la table
$sql = "INSERT INTO clim (nom_prenom_client, email_client, tel_client,adresse_fact,type_bat,marque_clim,nb,config,contrainte,duree,montant) VALUES ('$nom_prenom_client', '$email_client',
 '$tel','$adresse_fact','$type_bat','$marque_clim','$nb','$config','$contrainte','$duree','$montant')";

// Instanciation de la classe PDF (par exemple, TCPDF)
// Instanciation de la classe PDF (par exemple, TCPDF)
if ($conn->query($sql) === TRUE) {
$pdf = new TCPDF();
$pdf->SetFont('times', '', 12);

$startY = $pdf->GetY();

// Logo (supposons que vous ayez un fichier image appelé logo.png)
$logoPath = 'test sah.png';
$pdf->Image($logoPath, 150, $startY, 40, '', 'PNG');

// Réinitialiser la position du pointeur en Y après avoir ajouté le logo
$pdf->SetY($startY);

// Ajout d'une page
$pdf->AddPage();

// Titre du devis
$pdf->Cell(0, 10, 'Devis Climatisation', 0, 1, 'C');

// Informations sur le client
$pdf->Cell(0, 10, 'Nom et Prénom du client: ' . $nom_prenom_client, 0, 1);
$pdf->Cell(0, 10, 'Email Client: ' . $email_client, 0, 1);
$pdf->Cell(0, 10, 'Téléphone: ' . $tel, 0, 1);

// Configuration des colonnes

// Tableau des détails de la facture
$data = array(
    array('Adresse de facturation:', $adresse_fact),
    array('Type de bâtiments:', $type_bat),

    array('Marque et modèle de l unité de climatisation:', $marque_clim),

    array('Nombre d unités nécessaires:', $nb),
    array('Configuration électrique actuelle du bâtiment:', $config),
    
    array('Demandes particulières du client:', $contrainte),
    array('Durée estimée des travaux:', $duree, 'Service:', 'Climatisation'),
    array('Montant total (HT)', $montant),
    array('TVA (19%)', $montant * 0.19), // Montant de la TVA (20%)
    array('Montant total (TTC)', $montant * 1.2), // Montant total TTC (HT + TVA)
);

// Configuration des colonnes
$colWidth = 95; // Largeur de chaque colonne

// Ajout du tableau au PDF
$pdf->Ln();
$pdf->SetFillColor(255, 255, 255);
$pdf->SetTextColor(0);
$pdf->SetDrawColor(0);
$pdf->SetLineWidth(0.1);
$pdf->SetFont('', 'B');
foreach ($data as $row) {
    // Afficher chaque paire de valeurs dans deux colonnes
    $pdf->Cell($colWidth, 10, $row[0], 1, 0, 'C', true);
    $pdf->Cell($colWidth, 10, $row[1], 1, 1, 'C', true);
}
$pdf->Ln();

// Total estimatif
 // Exemple de calcul du total
$pdf->Cell(0, 10, 'Signature', 0, 1);


// Déplace le curseur vers le bas de la page
$pdf->SetY(-15);

// Définit la police du footer
$pdf->SetFont('helvetica', 'I', 8);

// Ajoute le nom de l'entreprise dans le footer
$pdf->Cell(0, 10, 'Aleximmo', 0, false, 'L', 0, '', 0, false, 'T', 'M');

// Obtient la date d'aujourd'hui
$date = date('d/m/Y');

// Ajoute la date dans le footer
$pdf->Cell(0, 6, 'Date: ' . $date, 0, false, 'R', 0, '', 0, false, 'T', 'M');


// Autres informations sur le devis si nécessaire

// Sortie du document PDF
$pdf->Output('devis_climatisation.pdf', 'I');
echo "Enregistrement réussi dans la base de données et PDF généré.";
}else {
    echo "Erreur d'enregistrement dans la base de données: " . $conn->error;
}

// Fermer la connexion à la base de données
$conn->close();
exit();
?>
