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
<div class="body">
<?php require ('headerView.php')?>
    <?php $eleve=$stmt->fetch() ?>
    <p class="supprimer">Voulez-vous vraiment supprimer le profil de: <?= $eleve['prenom'] . ' ' . $eleve['nom'] . ' ?'?></p>
    <a href="index.php?action=cancelProfile&id=<?= $eleve['id']; ?>">Supprimer le profil</a>
    <a href="index.php?action=portraitsDanciens&id=<?= $eleve['id']; ?>">Retour</a>
    <?php require ('footerView.php')?>
</div>
</body>
</html>