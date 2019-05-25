<?php
include ("DAO.php");
include ("produit.php");

class ProduitDAO extends DAO{
public $db;
public $table="produit";
public function __construct(){
// super("");

$this->db=Databases::get_db();

}

public function add(Produit $p){
$rp=$this->db->prepare("INSERT INTO produit (libelle,prix) VALUES (?,?)");
;

// ;->prepare("INSERT INTO produit (libelle,prix) VALUES (?,?)");
$rp->execute(array($p->libelle,$p->prix));
return $this->db->lastInsertId();
}
public function modifier(Produit $p,$id){
$rp=$this->db->prepare("UPDATE produit SET libelle=? ,prix=? WHERE id=?");
$rp->execute(array($p->libelle,$p->prix,$id));
}

}