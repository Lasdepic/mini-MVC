<?php

class Product
{

    public $produits;
    public $price;

    function __construct($produits, $price)
    {
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
