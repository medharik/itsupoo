<?php
// include("produitDAO.php");

class Produit{
    public $libelle;
    public $prix,$id;
    public function __construct($lib,$prix){
        $this->libelle=$lib;
        $this->prix=$prix;
    }
    
}