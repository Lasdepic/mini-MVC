<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produits</title>
</head>
<body>
    <h1>Les Produits</h1>

    <ul>
        <?php foreach($produits as $nom => $prix):?>
            <li><a href="index.php?page=Product&id=<?php echo $nom; ?>"><?php echo $nom; ?> : <?php echo $prix; ?>€</a></li>
            <?php endforeach; ?>
    </ul>
</body>
</html>