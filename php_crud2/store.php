<?php 
include "module.php";
$libelle=$_POST['libelle'];
$prix=$_POST['prix'];
$qte_stock=$_POST['qte_stock'];
ajouter($libelle,$prix,$qte_stock);
header("location:index.php");

?>