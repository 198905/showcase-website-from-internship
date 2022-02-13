
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleDlp.css">
    <title>Ajouter une fiche culture - BACK OFFICE</title>
</head>
<body>
    <div class="bodyBackground">
        <?php require ('headerView.php')?>        
            <div class="conteneur">
                <div class="text-bloc1" style="margin-top:90px;">
                    <h1>Ajouter une fiche culture</h1>
                    <div class="text-bloc1">
                    <p style="text-align:center;">Les liens rentres dans le texte seront cliquables.</p>
                </div>
                
                <form method="post"  enctype="multipart/form-data">

                    <section class="formulaireTitreCulture">
                        <span >Titre</span>
                        <input type="text" name="titre" required="">
                    </section>

                    <section class="formulaireTitreCulture">
                        <span >Texte</span>
                        <textarea input="" type="text" name="texte" required="" cols="40" rows="20"></textarea>
                    </section>

                    <section class="formulaireTitreCulture">
                        <span >Photo</span>
                        <input type="text" name="myfile">
                    </section>
                    <br><br>
                    <input type="submit" value="Envoyer">
                    <br><br>
                </form>
            </div>         
        <?php require ('footerView.php')?>
    </div>
</body>
</html>