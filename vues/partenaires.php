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

    <!--boucle foreach depuis la base de données-->
        <div class="bodyBackground">
            <div class="partenaires">
            <?php 
                while ($donnees=$partenaires->fetch()) {?>
                <a href=""><img src="images/LRTBD.png" alt="" class="partenairesImages"></a>
                <h3 class="partenairesNames"><a>LRTBD</a></h3>
            </div >
            <?php } ?>
        </div>
    </div>
    <?php require ('footerView.php')?>
</body>
</html>