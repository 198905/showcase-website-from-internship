<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleDlp.css">
    <title>Equipe Pédagogique</title>
</head>
<body>
    <?php require ('headerView.php')?>
    <div class="bodyBackground">       
        <h1 class="equipePTitre">Equipe Pédagogique</h1>
        <div class="enseignants"><!--grid-->
            <!--case-->
            <?php 
            while ($donnees=$reponse2->fetch()) {?>  
            <div class="enseignant">
            <a href="index.php?action=portraitEnseignant&id=<?php echo $donnees['id']; ?>">
                    <img src="<?php echo $donnees['photo']?>" alt="" class="photoEnseignant">
                </a>
                <h1 style="margin-left:auto;margin-right:auto;"><?= $donnees['surname'] .' '. $donnees['name'] ?></h1>
                <p><?= $donnees['fonction'] ?></p>
            </div>
            <?php } ?>
        </div>
    </div>
    <?php require ('footerView.php')?>
</body>
</html>