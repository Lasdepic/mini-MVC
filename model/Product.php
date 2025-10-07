<?php

class Product
{

    public $id;
    public $produits;
    public $price;

    function __construct($id, $produits, $price)
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
