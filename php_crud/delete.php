<?php 
include_once "module.php";
$id=$_GET['id'];
supprimer($id);
sir("index.php");
?>