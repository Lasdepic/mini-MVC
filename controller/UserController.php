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
        $id = $_GET['id'];
        $userDelete = $this->userDao->deleteUser($id);

        if($userDelete) {
            header("Location: index.php?page=users");
        }
        exit();
    }

    public function addOneUser()
    {
        $nomUser = $_POST['nom'];
        $this->userDao->addUser($nomUser);
        header("Location: index.php?page=users");
        exit();
    }
}
?>