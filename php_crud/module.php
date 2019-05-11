<?php 
$cnx="";
function connecter_db ( ) {

    $cnx=new PDO("mysql:host=localhost;dbname=dbproduit","root","");
    return $cnx;
    }

    function supprimer($id){
//global $cnx;
    $cnx =connecter_db();
$rp=$cnx->prepare("delete from produit where id=?");
$rp->execute(array($id));
}
function modifier($id,$libelle,$prix){
        
    $cnx =connecter_db();
    $rp=$cnx->prepare("update produit set libelle=?, prix=? where id=?");
    $rp->execute(array($libelle,$prix));

}

function ajouter($libelle,$prix){
    
    $cnx =connecter_db();
    $rp=$cnx->prepare("insert into produit(libelle,prix) values(?,?)");
    $rp->execute(array($libelle,$prix));
}

function all(){
    
    $cnx =connecter_db();
    $rp=$cnx->prepare("select * from produit order by id desc");
    $rp->execute(array());
return $rp->fetchAll();
}
function get($id){
    
    $cnx =connecter_db();
    $rp=$cnx->prepare("select * from produit where  order by id=? desc");
    $rp->execute(array($id));
return $rp->fetch();
}
function get_by($condition){
    
    $cnx =connecter_db();
    $rp=$cnx->prepare("select * from produits where $condition");
    $rp->execute(array());
return $rp->fetchAll();
}

function sir($url){
header("location:$url");
exit();
}

function demarrer_session(){
if(!isset($_SESSION)){
session_start();

}
session_regenerate_id();
}
function verifier($login,$passe){
    $cnx =connecter_db();
    $rp=$cnx->prepare("select * from users where login=? and passe=?");
    $rp->execute(array($login,$passe));
   $user= $rp->fetch();
   //var_dump($user);
  // die("erreur");
   if(empty($user)){
        sir("login.php?cn=no");
   }else{
    demarrer_session();
       $_SESSION['login']=$login;
       $_SESSION['passe']=$passe;
       $_SESSION['nom']=$user['nom'];
   }
}


?>