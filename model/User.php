<?php

class User{
    public $name;

    function __construct($name){
        $this->name = $name;
    }

    public function afficherName($name){
        $this->name = $name;
    }
}


?>