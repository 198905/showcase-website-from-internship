<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="styleDlp.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="bodyBackground">
        <?php require ('headerView.php')?>
        <h1>Les Actualités</h1>
        <div class="actualite">
            <?php while ($data=$eleves->fetch()) {?>
            <div class="imgActualites">
                <img src="<?=$data['photo']?>" alt="">
            </div> 
            <div class="actualiteTxt">  
                <h2>
                    <?=$data['titre']?>
                </h2>
                <p>
                    <?=nl2br($data['texte'])?>            
                </p>
                <?php } ?>
            </div>
        </div>
        <div class="separation"></div>
        <div class="content">
            <?php require ('footerView.php')?>
        </div>
    </div>
</body>
</html>