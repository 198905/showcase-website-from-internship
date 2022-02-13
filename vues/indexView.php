<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleDlp.css">
    <title>Accueil</title>
</head>
<body class="BackgroundImage">
    
    <div class="bodyBackground">
        <?php require ('headerView.php')?>
        <div class="AccueilaLaUne">
            <?php $aLaUne=$data->fetch() ?>
            <img src="<?=$aLaUne['photo']?>" alt="" class="imageALaUne">
            <div class="AccueilALaUneTexte">
                <p class="TitreAlaUne">A LA UNE</p>
                <p class="paragraph">
                   <?=$aLaUne['texte']?>
                </p>
            </div>
        </div>
        <h1>NOS FORMATIONS</h1>
        <div class="nosFormations">
            <div>
                <p>
                STAGE - CURSUS INTENSIF 
                <strong>200h</strong>  <br>
                (1 MOIS : AOÛT 2019) / TARIF (FORMATION) : 650€ <br>
                <strong>15</strong> DISCIPLINES, 
                SPECTACLE EN FIN DE STAGE                
                </p>
                <div class="pageAccueilBouton">
                    <a href="index.php?action=stage1Mois" class="pageAccueilBoutonTxt">STAGE</a>
                </div>
            </div>
            <div>
                <p>
                MASTERCLASS - CURSUS COMPLET 
                <strong>1800h </strong><br>
                (9 MOIS : OCTOBRE 2019-JUIN 2020) /  
                TARIF (FORMATION) : 390€/MOIS <br>
                <strong>17</strong> DISCIPLINES 
                35 REPRÉSENTATIONS 
                </p>
                <div class="pageAccueilBouton">
                    <a href="index.php?action=masterClass" class="pageAccueilBoutonTxt">MASTERCLASS</a>
                </div>
            </div>
        </div>
        
        <h1 >NOS ELEVES</h1>
        <div class="commentairesAccueil">
            <div class="commentairesAccueilVignette">
                <div class="commentairesAccueilVignetteTitreImage">
                    <img src="" alt="" class="commentairesAccueilVignetteImage">
                    <h3 class="commentairesAccueilVignetteTitre">Titre</h3>
                </div>
                <p class="commentairesAccueilVignetteCommentaire">
                    Commentaire Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Magnam, nam? Nemo sed fugiat, quia similique rem mollitia quaerat aut 
                    cupiditate iure laudantium? At officiis eveniet nobis, vitae illum ullam inventore?
                </p>
                <p  class="commentairesAccueilVignetteCommentaireSignature">
                    Signature
                </p>
            </div>
            <div class="commentairesAccueilVignette">
                <div class="commentairesAccueilVignetteTitreImage">
                    <img src="" alt="" class="commentairesAccueilVignetteImage">
                    <h3 class="commentairesAccueilVignetteTitre">Titre</h3>
                </div>
                <p class="commentairesAccueilVignetteCommentaire">
                    Commentaire Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Magnam, nam? Nemo sed fugiat, quia similique rem mollitia quaerat aut 
                    cupiditate iure laudantium? At officiis eveniet nobis, vitae illum ullam inventore?
                </p>
                <p class="commentairesAccueilVignetteCommentaireSignature">
                    Signature
                </p>
            </div>
        </div>
        
        <div class="accueilInscription">
            <h1>COMMENT POSTULER :</h1>
            <img class="accueilInscriptionImage" src="images/Demain-le-Printemps-ecole-theatrale-sovietique-admission-inscription-1.png" alt="">
        </div>
            <h1>LES MEDIAS</h1>
        <div class="medias">
            <div class="videos">
                <iframe width="400" height="225" src="https://www.youtube.com/embed/GNqyJUyiPo0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <iframe width="400" height="225" src="https://www.youtube.com/embed/P_wNFYQEKr0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="accueilMediasApropos">
                <div class="h2accueil"><h3>média à propos de nous</h3>
                </br>
                    <div class="pageAccueilBouton2">
                        <a href="index.php?action=masterClass" class="pageAccueilBoutonTxt">lire</a>
                    </div>
                </div>
                <div class="h2accueil"><h3>Les médias à propos de nous</h3>
                </br>
                    <div class="pageAccueilBouton2">
                        <a href="index.php?action=masterClass" class="pageAccueilBoutonTxt">lire</a>
                    </div>
                </div>
                <div class="h2accueil"><h3>Autre média à propos de nous</h3>
                </br>
                    <div class="pageAccueilBouton2">
                        <a href="index.php?action=masterClass" class="pageAccueilBoutonTxt">lire</a>
                    </div>
                </div>
            </div>           
        </div>
    </div>
<?php require ('footerView.php')?>
</body>
</html>