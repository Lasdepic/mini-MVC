<?php
require_once "./controller/UserController.php";
require_once "./controller/ProductController.php";

if (isset($_GET['page'])) {
    $page = $_GET['page'];

    switch ($page) {
        case 'user':
            $user = new UserController();
            $user->afficherName("Wahid");
            break;
        case 'Products':
            $produits = new ProductController();
            $produits->afficherProduits();
            break;
        case 'Product':
            $produit = new ProductController();
            $produit->afficherproduit();
            break;
        default:
            echo "Page 404 non trouvé";
            break;
    }
}
