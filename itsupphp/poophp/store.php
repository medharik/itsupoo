<?php
include ('produitDAO.php');
extract($_POST);
$p=new produit($libelle,$prix);
$pdao=new produitDAO();

$pdao->add($p);
header("location:index.php");