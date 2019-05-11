<?php 
include "module.php";
$id=$_GET['id'];
supprimer($id,'soft');
header("location:index.php");

?>