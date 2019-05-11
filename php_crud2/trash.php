<?php include "module.php";

$produits=all("no");
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
<div class="alert alert-info">Liste des produits</div>
    <div class="container">
        <div class="row">
            <div class="col-12">
            <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Libelle</th>
      <th scope="col">prix</th>
      <th scope="col">qte stock</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>

<?php foreach ($produits as $p) {
?>
    <tr>
      <th scope="row"><?php echo $p['id']?></th>
      <td><?php echo $p['libelle']?></td>
      <td><?php echo $p['prix']?></td>
      <td><?php echo $p['qte_stock']?></td>
      <td>
      <a href="restaurer.php?id=<?php echo $p['id']?>" class="btn btn-info btn-sm"  >
      restaurer
      </a>
  
      </td>
    </tr>
<?php }  ?>
  
  </tbody>
</table>
            
            </div>
        </div>
    </div>



        <?php include "_js.php";?>

</body>
</html>