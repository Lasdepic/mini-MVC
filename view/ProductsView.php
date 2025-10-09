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
        <?php foreach ($products as $product): ?>
            <li>
                <a href="index.php?page=Product&id=<?= $product->id ?>">
                    <?php echo htmlspecialchars($product->produits); ?> : <?php echo htmlspecialchars($product->price) ?>€
                </a>

                <button><a href="index.php?page=editProductForm&id=<?= $product->id ?>">Modifier ✍🏻</a></button>
                
                <form method="POST" style="display: inline;">
                    <input type="hidden" name="id" value="<?= $product->id ?>">
                    <button type="submit">
                        ❌ Supprimer
                    </button>
                </form>
            </li>
        <?php endforeach; ?>
    </ul>
    <a href="index.php?page=users">Profils</a>
</body>

</html>