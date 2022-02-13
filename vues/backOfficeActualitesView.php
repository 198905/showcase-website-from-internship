
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="styleDlp.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Nouvelles Actualités - BACK OFFICE</title>
</head>
<body>
<div class="bodyBackground">
    <?php require ('headerView.php')?>
    <div style="margin-top:90px;">
    <h1>Ajouter une Actualité</h1>
        <p style="text-align:center;">Les liens rentres dans le texte et dans le descriptif seront cliquables.<br/>Le lien sera ouvert lors de click sur la photo.
        </p>
    </div>
    <form action="" method="post">
        <div>
            <label for="titre">titre</label>
            <textarea name="titre" id="titre" > </textarea>
        </div>
        <div>
            <label for="texte">texte</label>
            <textarea name="texte" id="texte" cols="140" rows="50"> </textarea>
        </div>
        <div>
            <label for="photo">photo"</label>
            <textarea name="photo" id="photo" > </textarea>
            <input type="submit">
        </div>
    </form>
    <?php require ('footerView.php')?>
</div>
</body>
</html>