<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produits</title>
</head>

<body>
    <h1>Les Produits</h1>

    <form action="index.php?page=addProduct" method="POST">

        <label for="product_name">Nom du produit :</label>
        <input type="text" id="produits" name="produits" required>

        <label for="product_price">Prix :</label>
        <input type="number" id="prix" name="prix" required>

        <button type="submit">Valider</button>
    </form>

    <ul>
        <?php foreach ($products as $product): ?>
            <li>
                <a href="index.php?page=Product&id=<?= $product->id ?>">
                    <?php echo htmlspecialchars($product->produits); ?> : <?php echo htmlspecialchars($product->price) ?>€
                </a>
                <a href="index.php?page=deleteProduct&id=<?= $product->id ?>">
                    ✕
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
    <a href="index.php?page=users">Profils</a>
</body>

</html>