<?php

$serveur = "localhost";
$utilisateur = "root";
$mot_de_passe = "";
$base_de_donnees = "bibliotheque";

$connexion = new mysqli($serveur, $utilisateur, $mot_de_passe, $base_de_donnees);

if ($connexion->connect_error) {
    die("Échec de la connexion: " . $connexion->connect_error);
}


$ID_Reservation = $_POST['ID_Reservation'];
$NumeroMembre = $_POST['NumeroMembre'];
$ISBN = $_POST['ISBN'];
$DateReservation = $_POST['DateReservation'];


$ID_Reservation = $connexion->real_escape_string($ID_Reservation);
$NumeroMembre = $connexion->real_escape_string($NumeroMembre);
$ISBN = $connexion->real_escape_string($ISBN);
$DateReservation = $connexion->real_escape_string($DateReservation);


$sql = "INSERT INTO reservations (ID_Reservation, NumeroMembre, ISBN, DateReservation) VALUES ('$ID_Reservation', '$NumeroMembre', '$ISBN', '$DateReservation')";

if ($connexion->query($sql) === TRUE) {
    echo "Nouvelle réservation ajoutée avec succès !";
} else {
    echo "Erreur: " . $sql . "<br>" . $connexion->error;
}


$connexion->close();
?>
