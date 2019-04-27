<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test </title>
</head>
<body oncontextmenu="return false;" style="height:100vh;background:pink" >
<?php include "_menu.php";?>
    
    <form action="store.php" method="post">
    <input type="text" placeholder="libelle" name="libelle">
    <input type="text" placeholder="prix" name="prix">
    <input type="submit" value="ajouter">
    </form>

</body>
</html>