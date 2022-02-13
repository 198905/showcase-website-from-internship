<?php 

if(!filter_var($_POST["mail"], FILTER_VALIDATE_EMAIL)) { 
    echo "adresse email invalide";
}

$stmt="INSERT INTO `users` (`name`, `pass`, `mail`, `role`) 
        VALUES (:name, :pass, :mail, 'user')";

$query=$bdd->prepare($stmt);

$pass = password_hash($_POST["pass"], PASSWORD_ARGON2ID);

$query->bindvalue( ':name', strip_tags($_POST["name"]) );
$query->bindvalue( ':mail', $_POST["mail"]);
$query->bindvalue( ':pass', $pass);
$query->execute(); 
?>

   