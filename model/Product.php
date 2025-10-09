<?php

class Product
{

    public $id;
    public $produits;
    public $price;

    function __construct(int $id, string $produits, float $price)
    {
        $this->id = $id;
        $this->produits = $produits;
        $this->price = $price;
    }

//     public function afficherProduits()
//     {
//         return $this->produits;
//     }

//     public function afficherProduit(){
//         return $this->produits;
//     }
}
