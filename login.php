<!DOCTYPE html>
<html>
<head>
    <title>Connexion</title>
    <link rel="stylesheet" type="text/css" href="styles.css"> 
</head>
<body>
    <div class="container">
        <h2>Connexion</h2>
        <form action="traitementlogin.php" method="post">
            <label for="username">ID_Utilisateur:</label><br>
            <input type="text" id="ID_Utilisateur" name="ID_Utilisateur"><br>
            <label for="username">NomUtilisateur:</label><br>
            <input type="text" id="NomUtilisateur" name="NomUtilisateur"><br>

            <label for="password">MotDePasse:</label><br>
            <input type="password" id="MotDePasse" name="MotDePasse"><br>

            <input type="submit" value="Se connecter">
        </form>
    </div>
</body>
</html>
