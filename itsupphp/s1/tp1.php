<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Documetp 1 phpnt</title>
    <link rel="stylesheet" href="bootstrap.min.css">
</head>
<body>
<div class="container">



<table class="table table-stripped table-dark table-bordered">
    <tr class="bg-info">
        <td>libelle</td>
        <td>prix</td>
        <td>qte</td>
        <td>photo</td>
    </tr>
<?php 
for($i=1;$i<=10;$i++){  
$libelle="libelle $i"; 
$prix=rand(100,1000);
$qte=rand(0,100);
$img= "images/".rand(1,3).".jpg";
?>

 <tr class="<?=(($qte<40)?  'bg-danger': 'bg-success' );?>">
        <td ><?=$libelle?></td>
        <td><?=$prix?></td>
        <td><?=$qte?></td>
        <td><img src="<?=$img?>"  width="150"></td>
    </tr>
<?php } ?>
</table>
    
</div>

</body>
</html>