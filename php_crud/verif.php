<?php 
include "module.php";
extract($_POST);
verifier($login,md5($passe));
sir("index.php");
?>