<!DOCTYPE html>
<html>
<head>
    <title>Emprunter</title>
    <link rel="stylesheet" type="text/css" href="styles.css"> 
</head>
<body>
    <div class="container">
        <h2>Ajouter un nouveau emprunt</h2>
        <form action="traitementemprunter.php" method="post">
           <label for="nom">ID_Emprunt:</label><br>
            <input type="text" id="ID_Emprunt" name="ID_Emprunt"><br>
            <label for="nom">NumeroMembre:</label><br>
            <input type="text" id="NumeroMembre" name="NumeroMembre"><br>
            <label for="nom">ISBN:</label><br>
            <input type="text" id="ISBN" name="ISBN"><br>
            <label for="nom">DateEmprunt:</label><br>
            <input type="text" id="DateEmprunt" name="DateEmprunt"><br>
            <label for="nom">DateDeRetourPrevue:</label><br>
            <input type="text" id="DateRetourPrevue" name="DateRetourPrevue"><br>
            <label for="nom">DateRetourEffective:</label><br>
            <input type="text" id="DateRetourEffective" name="DateRetourEffective"><br>
            
           
            <input type="submit" value="Ajouter">
        </form>
    </div>
</body>
</html>
