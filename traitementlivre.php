<?php

$serveur = "localhost";
$utilisateur = "root";
$mot_de_passe = "";
$base_de_donnees = "bibliotheque";

$connexion = new mysqli($serveur, $utilisateur, $mot_de_passe, $base_de_donnees);


if ($connexion->connect_error) {
    die("Échec de la connexion: " . $connexion->connect_error);
}

$Titre = $_POST['Titre'];
$Auteur = $_POST['Auteur'];
$ISBN = $_POST['ISBN'];

$Titre = $connexion->real_escape_string($Titre);
$Auteur = $connexion->real_escape_string($Auteur);
$ISBN = $connexion->real_escape_string($ISBN);


$sql = "INSERT INTO Livres (Titre, Auteur, ISBN) VALUES ('$Titre', '$Auteur', '$ISBN')";

if ($connexion->query($sql) === TRUE) {
    echo "Nouveau livre ajouté avec succès !";
} else {
    echo "Erreur: " . $sql . "<br>" . $connexion->error;
}


$connexion->close();
?>
