<?php 

extract($_GET);
$cnx=mysqli_connect("localhost","root","","dbtest") or die ("erreur cnx");

$r=mysqli_query($cnx," select email from user where email ='$email' ");
$l=mysqli_fetch_assoc($r);
echo $l['email'];
?>