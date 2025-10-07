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
}
?>