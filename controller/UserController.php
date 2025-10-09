<?php
require_once "./model/User.php";

class UserController{

    public $userDao;

    public function __construct($userDao)
    {
        $this->userDao = $userDao;
    }
    public function displayAllusers(){
        $users = $this->userDao->getAllUser();
        require_once "./view/userView.php";
    }

    public function displayOneUser(){
        $id = $_GET['id'];
        $user = $this->userDao->getOneUser($id);
        require "./view/userDetail.php";
    }

    public function deleteOneUser(){
        $id = $_POST['id'];
        $this->userDao->deleteUser($id);
        header("Location: index.php?page=users");
        exit();
    }

    public function addOneUser()
    {
        $nomUser = $_POST['nom'];
        $this->userDao->addUser($nomUser);
        header("Location: index.php?page=users");
        exit();
    }

    public function displayEditUser(){
    $id = $_GET["id"];
    $user = $this->userDao->getOneUser($id);
    require_once "./view/editUser.php";
}

public function editOneUser(){
    $id = $_POST["id"];
    $nom = $_POST["nom"];
    $this->userDao->editUser($nom, $id);
    header("Location: index.php?page=users");
    exit();
}
}
?>