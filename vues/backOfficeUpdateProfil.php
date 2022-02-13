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
        <div class="conteneur">
        <div class="text-bloc1" style="margin-top:90px;">
            <h1>Mise à jour d'un portrait- BACK OFFICE</h1>
            <p style="text-align:center;">
                Les liens rentrés dans le texte seront cliquables.
            </p>
        </div>
        <form   method="post" action="index.php?action=backOfficeProfil" 
                enctype="multipart/form-data" class="formulaire">
            <input type="hidden" name="eid" value="">
            <section>
                <span class="titre-ligne">Nom</span>
                <input type="text" name="nom" value="">
            </section><br/>

            <section>
                <span class="titre-ligne">Prénom</span>
                <input type="text" name="prenom" value="">
            </section><br/>

            <section>
                <span class="titre-ligne">description</span>
                <textarea name="description" cols="140" rows="50"></textarea>
            </section><br/>

            <section>
                <span class="titre-ligne">Photo</span>
                <input type="file" name="photo" enctype="multipart/form-data">
            </section><br/>

            <section>
                <span class="titre-ligne">Lien article</span>
                <textarea name="article" rows="3" cols="40"></textarea>
            </section>
            <input type="submit" name="submit" value="Upload">
        </form>
        <?php require ('footerView.php')?>
    </div>
</body>
</html>