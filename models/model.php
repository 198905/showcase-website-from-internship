<?php
function dbConnect() {
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=dlp;charset=utf8', 'root', '');
        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $bdd->setAttribute(PDO::ATTR_EMULATE_PREPARES, FALSE);
        $bdd->setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND,'SET NAMES UTF8');
    } catch(Exception $e) {
        echo 'Erreur : '.$e->getMessage();
    }
}

//authentification page 

function connectUser() {
    
    if (!filter_var($_POST['mail'],FILTER_VALIDATE_EMAIL)) {
        die('format incorrect');
    }
    $sql = ('SELECT * FROM users WHERE mail = :mail');
    $stmt=$bdd->prepare($sql);
    $stmt->bindvalue(":mail", $_POST['mail'], PDO::PARAM_STR);
    $stmt->execute();
    $result=$stmt->fetch();

    $isPasswordCorrect = password_verify($_POST['pass'], $result['pass']);

    if (!$result)
    {
        echo 'Mauvais identifiant ou mot de passe !';
    }
    else
    {
        if ($isPasswordCorrect) {
            session_start();
            $_SESSION['id'] = $result['id'];
            $_SESSION['mail'] = $result['mail'];
            echo 'Vous êtes connecté !';
        }
        else {
            echo 'Mauvais identifiant ou mot de passe !';
        }
    }
}
    

// accueil, actualites pages

function queryActualites() {
    
    $data = $bdd->query('SELECT * FROM actualites ORDER BY ID DESC LIMIT 1');
}

// backOfficeActualites page

function newActualite() {
    $bdd=dbConnect();
    $stmt='INSERT INTO `actualites` (`texte`, `titre`, `photo`) VALUES (:texte, :titre, :photo)';
    
    $texte=strip_tags($_POST["texte"]);
    $titre=strip_tags($_POST["titre"]);
    $photo=strip_tags($_POST["photo"]);    

    $query=$bdd->prepare($stmt);
    
    $query->bindvalue(':texte', $texte);
    $query->bindvalue(':titre', $titre);
    $query->bindvalue(':photo', $photo);
    
    $query->execute();
}

