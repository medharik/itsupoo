<?php 
include "produitDAO.php";
$p=new ProduitDAO();
$produits=$p->all();
//var_dump($produits);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
<h2> liste des produits</h2>
<table>
    <tr>
        <td>id</td>
        <td>libelle</td>
        <td>prix</td>
        <td>action</td>
    </tr>
    <?php foreach ($produits as $p) {
     ?>
    <tr>
        <td><?=$p['id']?></td>
        <td><?=$p['libelle']?></td>
        <td><?=$p['prix']?></td>
        <td><a href="">Supprimer</a>
        <a href="">Modifier</a>
        <a href="">Consulter</a></td>
    </tr>
    <?php }?>
</table>    
</body>
</html>