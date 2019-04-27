<?php
if(!isset($_GET['marque'])){
    header("location:marques.php?m=no");//redirection vers marques
}
$marque= $_GET['marque'];
$produits=array(
array('libelle'=>'hp dv 4','prix'=>9000,'marque'=>'hp'),
array('libelle'=>'dell dv 4','prix'=>9000,'marque'=>'dell'),
array('libelle'=>'hp dv 4','prix'=>9000,'marque'=>'hp')
);


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
    
   <div class="container">
       <div class="row">
          <?php  foreach ($produits as $x => $p) {
         ?>
  <?php if($p['marque']==$marque)  {?>
           <div class="col-md-6 card ">
         
                <ul>
                    <li>Libelle : <?=$p['libelle']?></li>
                    <li>prix :  <?=$p['prix']?>DHs</li>
                </ul>
          </div>
          <?php } } ?>
       </div>
   </div>
</body>
</html>