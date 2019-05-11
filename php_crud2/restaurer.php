<?php 
include "module.php";
$id=$_GET['id'];
restore($id);
header("location:trash.php");

?>