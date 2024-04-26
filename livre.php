<!DOCTYPE html>
<html>
<head>
    <title>Ajouter un nouveau livre</title>
    

       
    </style>
</head>
<body>
    <div class="container">
        <h2>Ajouter un nouveau livre</h2>
        <form action="traitementlivre.php" method="post">
            <label for="titre">Titre:</label><br>
            <input type="text" id="titre" name="Titre"><br> 
            <label for="auteur">Auteur:</label><br> 
            <input type="text" id="auteur" name="Auteur"><br> 
            <label for="ISBN">ISBN:</label><br> 
            <input type="text" id="ISBN" name="ISBN"><br> 
            <input type="submit" value="Ajouter">
        </form>
    </div>
</body>
</html>
