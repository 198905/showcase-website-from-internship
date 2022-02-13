
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleDlp.css">
    <title>Document</title>
</head>
<body>
<div class="bodyBackground">
    <?php require ('headerView.php')?>    
    <div class="seCultiver">
    <h1>QUI SOMMES-NOUS?</h1>
    <?php
    $data=$stmt->fetch() ?>
        <img src="<?= $data['photo']?>" alt=""class="AfficherEleveIndividuelPhoto">
        <h3 ><?=$data['surname'] .' '. $data['name']?></h3>
        <p class="seCultiverTxt">
            <?=nl2br($data['description'])?>
        </p>        
    </div>
</div>
<?php require ('footerView.php')?>
</body>
</html>
