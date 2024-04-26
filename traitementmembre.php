<?php

$serveur = "localhost";
$utilisateur = "root";
$mot_de_passe = "";
$base_de_donnees = "bibliotheque";

$connexion = new mysqli($serveur, $utilisateur, $mot_de_passe, $base_de_donnees);

if ($connexion->connect_error) {
    die("Échec de la connexion: " . $connexion->connect_error);
}


$NumeroMembre = $_POST['NumeroMembre'];
$Nom = $_POST['Nom'];
$Prenom = $_POST['Prenom'];
$INE = $_POST['INE'];
$Filiere = $_POST['Filiere'];
$Classe = $_POST['Classe'];
$DateNaissance = $_POST['DateNaissance'];

$NumeroMembre = $connexion->real_escape_string($NumeroMembre);
$Nom = $connexion->real_escape_string($Nom);
$Prenom = $connexion->real_escape_string($Prenom);
$INE = $connexion->real_escape_string($INE);
$Filiere = $connexion->real_escape_string($Filiere);
$Classe = $connexion->real_escape_string($Classe);
$DateNaissance = $connexion->real_escape_string($DateNaissance);


$sql = "INSERT INTO membres (NumeroMembre, Nom, Prenom, INE, Filiere, Classe, DateNaissance) VALUES ('$NumeroMembre', '$Nom', '$Prenom', '$INE', '$Filiere', '$Classe', '$DateNaissance')";

if ($connexion->query($sql) === TRUE) {
    echo "Nouveau membre ajouté avec succès !";
} else {
    echo "Erreur: " . $sql . "<br>" . $connexion->error;
}


$connexion->close();
?>
