<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier Utilisateur</title>
</head>

<body>
    <h1>Modifier Utilisateur</h1>

    <form method="POST" action="index.php?page=editUser">
        <input type="hidden" name="id" value="<?= $user->id ?>">
        <input type="text" name="nom" value="<?= htmlspecialchars($user->nom)?>" placeholder="Nom de l'utilisateur" required>
        <button type="submit">✒️ Valider</button>
    </form>
    <br>
    <a href="index.php?page=users">Retour à la liste des utilisateurs</a>
</body>

</html>