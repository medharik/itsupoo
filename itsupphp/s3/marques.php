<?php 
$m1=array('libelle'=>'hp','image'=>'https://picsum.photos/200/300?image=0');
$m2=array('libelle'=>'dell','image'=>'https://picsum.photos/200/300?image=1');
$m3=array('libelle'=>'Apple','image'=>'https://picsum.photos/200/300?image=2');
$m4=array('libelle'=>'SUMSUNG','image'=>'https://picsum.photos/200/300?image=3');

$marques=array($m1,$m2,$m3,$m4);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nos marques</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<?php 
if (isset($_GET['m'])) {
?>
<div class="alert alert-danger">
Ce composant est inexistant
</div>
<?php }?>
<div class="container">
<div class="row">

<?php foreach($marques as $m) {?>
  <div class="col-md-6 card my-2">
   <a href="produits.php?marque=<?=$m['libelle']?>"><img src="<?php echo $m['image']?>" class="card-img-top img-fluid" alt="..."></a> 
    <div class="card-body">
      <h5 class="card-title"><?=$m['libelle']?></h5>
       </div>
  </div>

<?php }?>

 
</div>

</div>
    

</body>
</html>