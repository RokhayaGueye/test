<!DOCTYPE html>
<html>
<head>
    <title>reservation</title>
    <link rel="stylesheet" type="text/css" href="styles.css"> 
</head>
<body>
    <div class="container">
        <h2> reservation</h2>
        <form action="traitementreservation.php" method="post">
        <label for="nom">ID_Reservation:</label><br>
            <input type="text" id="ID_Reservation" name="ID_Reservation"><br>
            <label for="nom">NumeroMembre:</label><br>
            <input type="text" id="NumeroMembre" name="NumeroMembre"><br>
            <label for="nom">ISBN:</label><br>
            <input type="text" id="ISBN" name="ISBN"><br>
            <label for="nom">DateReservation:</label><br>
            <input type="text" id="DateReservation" name="DateReservation"><br>
           
            <input type="submit" value="Ajouter">
        </form>
    </div>
</body>
</html>
