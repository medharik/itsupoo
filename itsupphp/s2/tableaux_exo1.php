<?php 
$p1=array('libelle'=>'hp dv 5', 'prix'=>5000,'img'=>'<img src="http://lorempixel.com/400/200/technics/1/">','qte'=>9);
$p2=array('libelle'=>'dell ss7', 'prix'=>6000,'img'=>'<img src="http://lorempixel.com/400/200/technics/2/">','qte'=>1000);
$stock=array($p1,$p2);//array(0=>$p1,1=>$p2)
$cles=array_keys($p1);//['libelle','prix],..
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>exo php tab</title>
    <link rel="stylesheet" href="bootstrap.min.css">
</head>
<body>
<table class="table table-stripped table-dark">
    <tr>
        <td>Libelle</td>
        <td>Prix</td>
        
    </tr>

    <?php  foreach($stock  as $c=>$v){?>
    <tr>
        <td><?= $v['libelle']?></td>
        <td><?= $v['prix']?></td>
    </tr>
    <?php } ?>
</table>
<hr>


<table class="table table-stripped">
    <tr>
<?php  foreach($cles as $a=>$b) {?>
        <td><?=$b?></td>
<?php } ?>
 </tr>

    <?php  foreach($stock  as $c=>$v){?>
    <tr>
       <?php foreach($v as $x=>$y) {?>
        <td  class="<?= ($x=='qte' && $y<10)? 'bg-danger':''  ?>"><?= $y?></td>
       <?php } ?>
       
    </tr>
    <?php } ?>
</table>
    
</body>
</html>