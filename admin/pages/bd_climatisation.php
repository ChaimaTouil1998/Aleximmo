<?php



// Vérifier la connexion
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

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
// Récupérez les autres données du formulaire de la même manière



if ($conn->query($sql) === TRUE) {
    echo "Enregistrement réussi dans la base de données";
} else {
    echo "Erreur d'enregistrement dans la base de données: " . $conn->error;
}

// Fermer la connexion à la base de données
$conn->close();
?>
