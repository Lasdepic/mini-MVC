<?php
require_once "./model/User.php";

class UserController{

    public function afficherName($name){
        $user = new User($name);
        require "./view/userView.php";
    }
}
?>