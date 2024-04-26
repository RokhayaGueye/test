<?php

$serveur = "localhost";
$utilisateur = "root";
$mot_de_passe = "";
$base_de_donnees = "bibliotheque";

$connexion = new mysqli($serveur, $utilisateur, $mot_de_passe, $base_de_donnees);


if ($connexion->connect_error) {
    die("Échec de la connexion: " . $connexion->connect_error);
}


$ID_Emprunt = $_POST['ID_Emprunt'];
$NumeroMembre = $_POST['NumeroMembre'];
$ISBN = $_POST['ISBN'];
$DateEmprunt = $_POST['DateEmprunt'];
$DateRetourPrevue = $_POST['DateRetourPrevue'];
$DateRetourEffective = $_POST['DateRetourEffective'];


$ID_Emprunt = $connexion->real_escape_string($ID_Emprunt);
$NumeroMembre = $connexion->real_escape_string($NumeroMembre);
$ISBN = $connexion->real_escape_string($ISBN);
$DateEmprunt = $connexion->real_escape_string($DateEmprunt);
$DateRetourPrevue = $connexion->real_escape_string($DateRetourPrevue);
$DateRetourEffective = $connexion->real_escape_string($DateRetourEffective);


$sql = "INSERT INTO emprunts (ID_Emprunt, NumeroMembre, ISBN, DateEmprunt, DateRetourPrevue, DateRetourEffective) VALUES ('$ID_Emprunt', '$NumeroMembre', '$ISBN', '$DateEmprunt', '$DateRetourPrevue', '$DateRetourEffective')";

if ($connexion->query($sql) === TRUE) {
    echo "Nouvel emprunt ajouté avec succès !";
} else {
    echo "Erreur: " . $sql . "<br>" . $connexion->error;
}


$connexion->close();
?>
