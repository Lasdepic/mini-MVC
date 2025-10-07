<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Utilisateurs</title>
</head>

<body>
    <h1>Liste des utilisateurs</h1>

    <form action="index.php?page=addUser" method="POST">
        <label for="nom">Nom de l'utilisateur :</label>
        <input type="text" id="nom" name="nom" required>
        <button type="submit">Ajouter</button>
    </form>

    <?php foreach ($users as $user): ?>
        <h2>Utilisateur : <?= htmlspecialchars($user->nom, ENT_QUOTES, 'UTF-8') ?></h2>
        <a href="index.php?page=user&id=<?= $user->id ?>">Voir le profil</a>
        <a href="index.php?page=deleteUser&id=<?= $user->id ?>">x</a>
    <?php endforeach; ?>
    <a href="index.php?page=Products">Produits</a>
</body>

</html>