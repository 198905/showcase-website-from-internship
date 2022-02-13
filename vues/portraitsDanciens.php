
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
<?php require ('headerView.php')?>
    <div class="bodyBackground">       
        <h1 class="equipePTitre">PORTRAITS</h1>
        <div class="portraitsDanciens"><!--grid-->
            <!--case-->
            <?php 
             while ($data=$eleves->fetch()) {?>  
            <div class="eleve">
                <div class="eleveImageNom">
                    <a href="index.php?action=portraitDanciensIndividuelV&id=<?= $data['id']; ?>">
                        <img src="<?= $data['photo']?>" alt="" class="photoEnseignant">
                    </a>
                    <a href="index.php?action=portraitDanciensIndividuelV&id=<?= $data['id']; ?>">
                        <h2 class="nomEleves"><?= stripslashes($data['prenom']) .' '. stripslashes($data['nom'])?></h2>
                    </a>
                </div>
                <?php if (isset($_SESSION['mail'])) {?>
                <div class="CancelUpdate">
                    <h3>
                        <a href="index.php?action=portraitDanciensModifier&id=<?= $data['id']; ?>">
                            Modifier
                        </a>
                    </h3> 
                    <h3>
                        <a href="index.php?action=portraitsDanciensSupprimer&id=<?= $data['id']; ?>">
                            Supprimer
                        </a>
                    </h3>
                </div>
                <?php } ?>
            </div>
            <?php } ?>
        </div>
    </div>
<?php require ('footerView.php')?>
</div>
</body>
</html>