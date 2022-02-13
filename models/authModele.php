<?php 

if (!filter_var($_POST['mail'],FILTER_VALIDATE_EMAIL)) {
    die('format incorrect');
}
$erreur=[];
$sql = ('SELECT * FROM users WHERE mail = :mail');
$stmt=$bdd->prepare($sql);
$stmt->bindvalue(":mail", htmlspecialchars($_POST['mail']), PDO::PARAM_STR);
$stmt->execute();
$result=$stmt->fetch();
$isPasswordCorrect = password_verify(htmlspecialchars($_POST['pass']), $result['pass']);

if (!$result)
{
    $erreur[]='Mauvais identifiant ou mot de passe !';
}else{
    if ($isPasswordCorrect) {
        
        $_SESSION['id'] = $result['id'];
        $_SESSION['mail'] = $result['mail'];
        $_SESSION['name'] = $result['name'];
    }
    else {
        $erreur[]='Mauvais identifiant ou mot de passe !';
    }
}
