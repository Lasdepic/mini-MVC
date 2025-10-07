<?php

class ProductsDao{
    private PDO $pdo;

    function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function getAllProduct(){
        $query = "SELECT * FROM Produits";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute();
        $dataProduct = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $products = [];

        foreach($dataProduct as $produit){
            $produit = new Product($produit['produits'], $produit['prix']);
            $products[] = $produit;
        }
        return $products;
    }

    public function getOneProduct(){
        $query = "SELECT * FROM Produits WHERE id = :id";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute();
        $produit = $stmt->fetch(PDO::FETCH_ASSOC);

        $product = new Product($produit['produits'], $produit['prix']);
        return $product;
    }
}

?>