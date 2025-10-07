<?php
require_once "./controller/UserController.php";
require_once "./controller/ProductController.php";
require_once "./model/dao/UserDao.php";
require_once "./model/dao/ProductsDao.php";
require_once "./db.php";

$pdo = DataBase::getConnexion();
$userDao = new UserDao($pdo);
$produitDao = new ProductsDao($pdo);




if (isset($_GET['page'])) {
    $page = $_GET['page'];

    switch ($page) {
        case 'users':
            $user = new UserController($userDao);
            $user->displayAllusers();
            break;
        case 'Products':
            $produits = new ProductController($produitDao);
            $produits->displayAllProduct();
            break;
        case 'Product':
            $produit = new ProductController($produitDao);
            $produit->displayOneProduct();
            break;
        case 'addProduct':
            $produit = new ProductController($produitDao);
            $produit->addOneProduct();
            break;
        case 'user':
            $user = new UserController($userDao);
            $user->displayOneUser();
            break;
        case 'addUser':
            $user = new UserController($userDao);
            $user->addOneUser();
            break;
        case 'deleteUser':
            $user = new UserController($userDao);
            $user->deleteOneUser();
            break;
        case 'deleteProduct':
            $produit = new ProductController($produitDao);
            $produit->deleteOneProduct();
            break;
        default:
            echo "Page 404 non trouvé";
            break;
    }
}

######################################################################################################
############################## ESSAI DE CONNEXION DE BASE DE DONNEE ##################################
######################################################################################################

// $id = 1;
// $pdo = new PDO("mysql:host=localhost;dbname=bewebProduits;","root","");
// $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
// $query = "SELECT * FROM Users WHERE id_user = :id";
// $stmt = $pdo->prepare($query);
// $stmt->execute([":id"=>$id]);

// $data = $stmt->fetch(PDO::FETCH_ASSOC);

// print_r($data);