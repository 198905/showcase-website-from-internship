<?php   

    $stmt='INSERT INTO `actualites` (`texte`, `titre`, `photo`) VALUES (:texte, :titre, :photo)';
    
    $texte=strip_tags($_POST["texte"]);
    $titre=strip_tags($_POST["titre"]);
    $photo=strip_tags($_POST["photo"]);    

    $query=$bdd->prepare($stmt);
    
    $query->bindvalue(':texte', $texte);
    $query->bindvalue(':titre', $titre);
    $query->bindvalue(':photo', $photo);
    
    $query->execute();

