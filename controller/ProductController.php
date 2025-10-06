<?php

require_once "./model/Product.php";

class ProductController
{
    public $produits;

    public function afficherProduits()
    {
        $productModel = new Product();
        $produits = $productModel->afficherProduits();
        extract($produits);
        require_once "./view/productsView.php";
    }

    public function afficherproduit(){
        $productModel = new Product();
        $produit = $productModel->afficherproduit();
        $produitSeul = $_GET['id'];
        $nom = $produitSeul;
        $prix = $produit[$produitSeul];
        require_once "./view/productView.php";
    }
}
