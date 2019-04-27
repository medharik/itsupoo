<?php 
include "module.php";
$produits=all();
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
<?php include "_menu.php";?>
    <h2>Liste des produits</h2>
    <table>
        <tr>
            <td>#</td>
            <td>libelle</td>
            <td>prix</td>
            <td>actions</td>
        </tr>
        <?php foreach ($produits as $p) {
         ?>
        <tr>
            <td><?=$p['id'];?></td>
            <td><?=$p['libelle'];?></td>
            <td><?=$p['prix'];?></td>
            <td><a onclick="return confirm('supprimer?')" href="delete.php?id=<?=$p['id'];?>">Supprimer</a></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>
