<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil User</title>
</head>
<body>
    <h1>Profil</h1>

    <h2><?php echo htmlspecialchars($user->nom); ?></h2>
    
    <br>
    <a href="index.php?page=users">Retour à la liste des utilisateurs</a>
    </body>
</html>