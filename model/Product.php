<?php

class Product
{

    public $produits = [
        "MacBook air M4" => "999",
        "Iphone 14 Pro" => "1249",
        "Xiaomi 17 Pro" => "799",
        "Cookie Choco" => "4",
        "Bonbon" => "2",
        "Pate Panzanie" => "3"
    ];

    function __construct()
    {
        $this->produits;
    }

    public function afficherProduits()
    {
        return $this->produits;
    }

    public function afficherProduit(){
        return $this->produits;
    }
}
