<?php

require_once "./model/Product.php";

class ProductController
{
    public $produitDao;

    public function __construct($produitDao)
    {
        $this->produitDao = $produitDao;
    }

    public function displayAllProduct()
    {
        $products = $this->produitDao->getAllProduct();
        require_once "./view/ProductsView.php";
    }

    public function displayOneProduct()
{
    $id = $_GET["id"];
    $product = $this->produitDao->getOneProduct($id);
    require_once "./view/productView.php";
}

    public function deleteOneProduct()
    {
        $id = $_POST["id"];
        $this->produitDao->deleteProduct($id);
        header("Location: index.php?page=Products");
        exit();
    }

    public function addOneProduct()
    {
        $nomProduit = $_POST['produits'];
        $prix = $_POST['prix'];
        $this->produitDao->addProduct($nomProduit, $prix);
        header("Location: index.php?page=Products");
        exit();
    }

    public function editOneProduct()
{
    if ($_POST) {
        $id = $_POST['id'];
        $nomProduit = $_POST['produits'];
        $prix = $_POST['prix'];
        $this->produitDao->editProduct($nomProduit, $prix, $id);
    }
    header("Location: index.php?page=Products");
    exit();
}
    
  public function displayEditProductForm()
{
    $id = $_GET["id"];
    $this->produitDao->getOneProduct($id);
    require_once "./view/editProduct.php";
}
}