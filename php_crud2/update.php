<?php 
include "module.php";
$libelle=$_POST['libelle'];
$prix=$_POST['prix'];
$qte_stock=$_POST['qte_stock'];
modifier($libelle,$prix,$qte_stock,$id);
header("location:index.php");

?>