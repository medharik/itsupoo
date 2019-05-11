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
<form action="store.php" method="post">
  <div class="form-group">
    <label for="libelle">Libelle</label>
    <input type="text" class="form-control" id="libelle" name="libelle" aria-describedby="emailHelp" placeholder=" Entrer Libellé" autocomplete="off">
   </div>
  <div class="form-group">
    <label for="prix">Prix</label>
    <input type="number" class="form-control" id="prix" name="prix" 
    placeholder="0">
  </div>
  <div class="form-group">
    <label for="prix">Quantité en stock</label>
    <input type="number" class="form-control" id="qte_stock" name="qte_stock" 
    placeholder="0">
  </div>
 
  <button type="submit" class="btn btn-primary">Valider</button>
</form>

</div>
</div>

</div>



        <?php include "_js.php";?>

</body>
</html>