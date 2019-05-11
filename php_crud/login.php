<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php 
if(isset($_GET['cn']) ){
?>
Login / mot de passe  incorrects
 
 <?php } ?>
<form action="verif.php" method="post">
    <input type="text" name="login">
    <input type="text" name="passe">
    <input type="submit">
</form>
    
</body>
</html>