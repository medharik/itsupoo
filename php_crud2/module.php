<?php 
function connecter_db(){
  $cnx=  new PDO("mysql:host=localhost;dbname=dbstock","root","");
  return $cnx;
}

function ajouter($libelle,$prix,$qte_stock){
$cnx=connecter_db();
$rp=$cnx->prepare("insert into produit(libelle, prix, qte_stock) values(?,?,?)");
$rp->execute(array($libelle,$prix,$qte_stock));
}
function supprimer($id,$comment="soft"){
$cnx=connecter_db();
if($comment=="soft"){
$rp=$cnx->prepare("update produit set afficher='no' where id=?");
}else
$rp=$cnx->prepare("delete from produit where id=?");
$rp->execute(array($id));
}

function restore($id){
    $cnx=connecter_db();
    $rp=$cnx->prepare("update produit set afficher='yes' where id=?");
    $rp->execute(array($id));
    }

function modifier($libelle,$prix,$qte_stock,$id){
$cnx=connecter_db();
$rp=$cnx->prepare("update produit set libelle=? , prix=? , qte_stock=? where id=?");
$rp->execute(array($libelle,$prix,$qte_stock,$id));
}
function all($afficher='yes'){
$cnx=connecter_db();
$rp=$cnx->prepare("select * from produit where afficher=? ");
$rp->execute(array($afficher));
$resultat=$rp->fetchAll();
return $resultat;
}

function find($id){
    $cnx=connecter_db();
    $rp=$cnx->prepare("select * from produit where id=? ");
    $rp->execute(array($id));
    $resultat=$rp->fetch();
    return $resultat;
    }
?>