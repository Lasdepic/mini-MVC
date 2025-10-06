<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Utilisateurs</title>
</head>

<body>
    <?php foreach ($users as $user): ?>
        <h1>Utilisateur : <?= htmlspecialchars($user->nom, ENT_QUOTES, 'UTF-8') ?></h1>
    <?php endforeach; ?>
</body>

</html>