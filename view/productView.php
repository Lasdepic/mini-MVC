<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produits</title>
</head>
<body>
    <h1>Le Produit</h1>

        <ul>
            <li><?php echo htmlspecialchars($product->produits); ?> : <?php echo htmlspecialchars($product->price); ?>€</li>
        </ul>
    </body>
</html>