<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Modifier Produit</h1>

    <form method="POST" action="index.php?page=editProduct">
        <input type="hidden" name="id" value="<?= $product->id ?>">
        <input type="text" name="produits" value="<?= htmlspecialchars($product->produits) ?>" placeholder="Nom du produit" required>
        <input type="number" name="prix" value="<?= $product->price ?>" placeholder="Prix" step="0.01" min="0" required>
        <button type="submit">✒️ Valider</button>
    </form>
</body>

</html>