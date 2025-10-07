<?php

class ProductsDao
{
    private PDO $pdo;

    function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function getAllProduct()
    {
        $query = "SELECT * FROM Produits";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute();
        $dataProduct = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $products = [];
        foreach ($dataProduct as $produit) {
            $product = new Product( $produit['id_produits'], $produit['produits'], $produit['prix']);
            $products[] = $product;
        }
        var_dump($products);
        return $products;
    }

    public function getOneProduct($id)
    {
        $query = "SELECT * FROM `Produits` WHERE id_produits = :id";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute([":id" => $id]);
        $dataProduit = $stmt->fetch(PDO::FETCH_ASSOC);


        if ($dataProduit) {
            return new Product(id: $dataProduit['id_produits'], produits: $dataProduit['produits'], price: $dataProduit['prix']);
        } else {
            return null;
        }
    }
}
