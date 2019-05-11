<?php 
include "module.php";
$id=$_GET['id'];
$produit=find($id);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php include "_css.php";?>
</head>
<body>
<?php include "_menu.php";?>
<div class="alert alert-info">
Nouveau produit
</div>
    
<div class="container">
<div class="row">
<div class="col-md-6 mx-auto shadow p-2">
<h3>Details du produit : <?php  echo $produit['libelle']?> </h3>
<h4>Le prix est de : <?php  echo $produit['prix']?>DHS</h4>
<h4>Le qte est de : <?php  echo $produit['qte_stock']?>DHS</h4>
</div>
</div>

</div>



        <?php include "_js.php";?>

</body>
</html>