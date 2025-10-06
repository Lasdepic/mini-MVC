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
        <?php foreach($products as $product):?>
            <li>
                <a href="index.php?page=Products&id=<?php echo htmlspecialchars($product->produits); ?>">
                    <?php echo htmlspecialchars($product->produits); ?> : <?php echo htmlspecialchars($product->price); ?>€
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>