<?php

class User{
    public int $id;
    public $nom;

    function __construct($id, $nom){
        $this->id = $id;
        $this->nom = $nom;
    }

    // public function afficherName($id, $nom, $prénom){
    //     $this->nom = $nom;
    // }
}


?>