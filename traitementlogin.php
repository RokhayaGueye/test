<?php

$serveur = "localhost";
$utilisateur = "root";
$mot_de_passe = "";
$base_de_donnees = "bibliotheque";

$connexion = new mysqli($serveur, $utilisateur, $mot_de_passe, $base_de_donnees);

if ($connexion->connect_error) {
    die("Échec de la connexion: " . $connexion->connect_error);
}


$ID_Utilisateur = $_POST['ID_Utilisateur'];
$NomUtilisateur = $_POST['NomUtilisateur'];
$MotDePasse = $_POST['MotDePasse'];


$ID_Utilisateur = $connexion->real_escape_string($ID_Utilisateur);
$NomUtilisateur = $connexion->real_escape_string($NomUtilisateur);
$MotDePasse = $connexion->real_escape_string($MotDePasse);


$sql = "INSERT INTO Utilisateurs (ID_Utilisateur, NomUtilisateur, MotDePasse) VALUES ('$ID_Utilisateur', '$NomUtilisateur', '$MotDePasse')";

if ($connexion->query($sql) === TRUE) {
    echo "Nouvel utilisateur ajouté avec succès !";
} else {
    echo "Erreur lors de l'ajout de l'utilisateur : " . $connexion->error;
}

$connexion->close();
?>
