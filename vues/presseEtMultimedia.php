
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="bodyBackground">
<?php require ('headerView.php')?>
<div class="presseMultimedia">
    <div>        
        <h1>Presse</h1>
        <?php 
        while ($donnees=$presse->fetch()) {?>  
        <img src="<?= $donnees['photo']?>" alt="">
        <?php } ?>        
    </div>
</div>
<div class="presseMultimedia">
    <div>
        <h1>Presse Internationale</h1>
        <?php 
        while ($donnees2=$presseInt->fetch()) {?>  
        <img src="<?= $donnees2['photo']?>" alt="">
        <?php } ?>
    </div> 
</div>
<?php require ('footerView.php')?>
</div>
</body>
</html>