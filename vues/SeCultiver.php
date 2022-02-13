<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div background="../images/fond.svg" class="bodyBackground">
<?php require ('headerView.php')?>
    <div class="seCultiver">
        <h1>SE CULTIVER</h1>
        <?php while ($donnees=$seCultiver->fetch()) {?>
        <img src="<?php echo $donnees['photo']?>" alt="" class="seCultiverImage">
        <h3 class="seCultiverTitre"><?php echo $donnees['titre']?></h3>
        <p class="seCultiverTxt">
        
        <?=nl2br($donnees['texte'])?>
        </p>
        <?php } ?>
    </div>
<?php require ('footerView.php')?>
</div>
</body>
</html>

