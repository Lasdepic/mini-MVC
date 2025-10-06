<?php

require_once "./model/Product.php";

class ProductController
{
    public $produitDao;

    public function __construct($produitDao)
    {
        $this->produitDao = $produitDao;
    }

    public function displayAllProduct(){
        $products = $this->produitDao->getAllProduct();
        require_once "./view/ProductsView.php";
    }
}
