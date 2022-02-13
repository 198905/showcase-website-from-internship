<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleDlp.css">
    <title>Document</title>
</head>
<body >
<!--headerHaut-->
<div class="bodyBackground">
    <header id="header">
        <div class="haut">
            <div class="headerHautGauche">
                <div >
                    <a href="" ><p class="languages">FR</p></a>
                </div>
                <div >
                    <a href="https://tomorrow-spring.org/"><p class="languages ">EN</p></a>
                </div>
                <div >
                    <a href="#"><p class="languages">RU</p></a>
                </div>
                <div>
                    <a href="https://www.facebook.com/domanilaprimaveraitalia/about/" ><p class="languages">IT</p></a>
                </div>
                <div >
                    <a href="http://www.ming-chun.org/"><p class="languages">CN</p></a>
                </div>
                <div >
                    <a href="https://morgaulaprintempo.eu/"><p class="languages">EO</p></a>
                </div>
            </div>
            <div >
            <?php if(isset($_SESSION['mail'])) {?>
                <a href="index.php?action=deconnexion" class="lien"><p><?="Déconnexion"?></p></a>
                <?php } else { ?>
                <a href="index.php?action=authentificationAdmin" class="lien"><p><?="Connexion"?></p></a>
                <?php } ?>
            </div>
            <div class="headerHautDroit">
                
                <div class="languages">
                    <a href="#"><img src="" alt=""></a><!--facebook-->
                </div>
                <div class="languages">
                    <a href="#"><img src="" alt=""></a><!--twitter-->
                </div>
                <div class="languages">
                    <a href="#"><img src="" alt=""></a><!--google+-->
                </div>
                <div class="languages">
                    <a href="#"><img src="" alt=""></a><!--linkedin-->
                </div>
                <div class="languages">
                    <a href="#"><img src="" alt=""></a>
                </div>
            </div>
        </div>
<!--headerBas-->
        <div class="menu HeaderBas">
            <a href="index.php?action=accueil"><img src="images/partenaires/Logo_DLP.png" alt="" class="logo"></a>  <!--logo (space between) gauche-->
            
            <header id="menuList" class="menuList" >
                    <!--éléments (space between) droit-->
                <div class="menuListElements">
                    <div class="menuListElement">
                        <button class="menuListElementButton">
                            <a href="" class="menuListElemnt">ECOLE</a>
                        </button>
                        <div class="menuListElementmenuItem">
                            <a href="index.php?action=contenuPedagogique">Contenu pédagogique</a>                            
                            <a href="index.php?action=equipePedagogique">Notre equipe pedagogique</a>
                            <a href="index.php?action=seCultiver">Se cultiver</a>
                        </div>
                    </div>
                </div>
                <div class="menuListElements">
                    <div class="menuListElement">
                        <button class="menuListElementButton">
                        <a href="" class="menuListElemnt">FORMATIONS</a>
                        </button>
                        <div class="menuListElementmenuItem">
                            <a href="index.php?action=stage1Mois">Stages 1 mois</a>                             
                            <a href="index.php?action=masterClass">Masterclass 10 mois </a>                             
                            <a href="#">Programme spécial pour le Maghreb </a>                             
                            <a href="index.php?action=admissions">Admissions</a>                             
                            <a href="index.php?action=ateliersdecouverte">Ateliers découverte</a>                             
                            <a href="index.php?action=nosDisciplines">Nos disciplines</a>                             
                            <a href="index.php?action=pasBesoinDeParlerRusse">Pas besoin de parler russe</a>                             
                            <a href="index.php?action=hebergements">Hébergements</a>                             
                            <a href="index.php?action=admissions">Diplôme de fin de formation</a>
                        </div>
                    </div>
                </div>
                <div class="menuListElements">
                    <div class="menuListElement">
                        <button class="menuListElementButton">
                        <a href="" class="menuListElemnt">LES ELEVES</a>
                        </button>
                        <div class="menuListElementmenuItem">
                            <a href="index.php?action=portraitsDanciens">
                                Portraits d'anciens
                            </a>
                            <a href="">blog</a>
                        </div>
                    </div>
                </div>
                <div class="menuListElements">
                    <div class="menuListElement">
                        <button class="menuListElementButton">
                            <a href="index.php?action=presseEtMultimedia">PRESSE & MULTIMEDIA</a>
                        </button>
                    </div>
                </div>
                <div class="menuListElements">
                    <div class="menuListElement">
                        <button class="menuListElementButton">
                            <a class="menuListElemnt">ASSO</a>
                        </button>
                        <div class="menuListElementmenuItem">
                            <a href="index.php?action=dlp">D.L.P</a>
                            <a href="index.php?action=MOOTeatro">MOO Teatro</a>
                            <a href="index.php?action=nousSoutenir">Nous soutenir</a>
                            <a href="index.php?action=Partenaires">Partenaires</a>
                        </div>
                    </div>
                </div>
                <div class="backOffice">
                    <div class="menuListElements">
                        <div class="menuListElement">
                            <button class="menuListElementButton">
                                <a href="index.php?action=actualites" class="menuListElemnt">ACTUALITES</a>
                            </button>
                        </div>
                    </div>
                </div>
                <div >
                    <div class="menuListElement">
                        <div >
                            <button class="menuHamburger reducedMenu">
                                 &#9776;
                            </button>
                        </div>
                    </div>
                    <script>
                        <?php require ('JS/menu.js') ?>
                    </script> 
                </div>
                <?php if (isset($_SESSION['mail'])) {?>
                    <div class="menuListElements">
                        <div class="menuListElement">
                            <button class="menuListElementButton">
                                <a class="menuListElemnt"><?='BACK OFFICE'?></a>
                            </button>
                            <div class="menuListElementmenuItem">
                            <a href="index.php?action=backOfficeActualites"><?='NOUVELLES ACTUALITES'?></a>
                            <a href="index.php?action=backOfficeProfil"><?='NOUVEAUX ELEVES'?></a>
                            <a href="index.php?action=backOfficeFicheCulture"><?='NOUVELLE FICHE CULTURE'?></a>
                        <?php } ?>
                        </div>
                    </div>
                <div >
            </div>
        </header>
    </header>
</div>
</body>
</html>