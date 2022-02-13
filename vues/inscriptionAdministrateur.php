
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

                    <h1>Ajouter un utilisateur</h1>
                    <div class="text-bloc1">

                </div>
                <div class="inscriptionAdministrateurForm">
                    <div class="inscriptionAdministrateurLabel"> 
                        <p class="inscriptionAdministrateurFormItem">Nom</p>
                        <p class="inscriptionAdministrateurFormItem">e-mail</p>
                        <p class="inscriptionAdministrateurFormItem">mot de passe  </p>
                    </div>
                    <form method="post" class="inscriptionAdministrateurFormItem">
                        <div class="formulaireTitreCulture inscriptionAdministrateurFormItem">
                            <input type="text" name="name"></input>
                        </div>
                        
                        <div class="formulaireTitreCulture inscriptionAdministrateurFormItem">
                            <input name="mail" id="mail"></input>
                        </div>
                        <div class="formulaireTitreCulture inscriptionAdministrateurFormItem">
                            <input id="motdepasse" maxlength="10" name="pass" type="password"></input>
                        </div>
                        <input type="submit" value="Ajouter">
                    </form>
                </div>
            </div>         
        <?php require ('footerView.php')?>
    </div>
</body>
</html>