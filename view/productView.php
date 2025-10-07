<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produits</title>
</head>
<body>
    <h1>Le Produit</h1>

    <h2><?php echo htmlspecialchars($product->produits); ?></h2>
    <p>Prix : <?php echo htmlspecialchars($product->price); ?>€</p>
    
    <br>
    <a href="index.php?page=Products">Retour à la liste</a>
    </body>
</html>