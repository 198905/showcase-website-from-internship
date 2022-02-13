<?php  
$eleves='SELECT * FROM eleves';

$sql='UPDATE `eleves` 
        SET `nom`=:nom, `prenom`=:prenom, `photo`=:photo, `description`=:description WHERE `id`=:id';
        if( isset( $_GET['id'] ) && $_GET['id'] !== '' ){
            $id = htmlspecialchars($_GET['id']);
           }
           $query->bindvalue(':id', $id);    
               
$nom=strip_tags($_POST["nom"]);
$prenom=strip_tags($_POST["prenom"]);
$description=strip_tags($_POST["description"]);  
$photo = 'images/eleves/' . pathinfo($_FILES['photo']['name'], PATHINFO_FILENAME);
$query=$bdd->prepare($sql);

$query->bindvalue(':nom', $nom);
$query->bindvalue(':prenom', $prenom);
$query->bindvalue(':description', $description);
$query->bindvalue(':photo', $photo);
$query->execute();

//Envoi de l'image:
$folder="images/eleves/";
$checkImageSize = $_FILES["photo"]["size"];
$error="";

if ($checkImageSize < 5000000000 && file_exists($photo)) {
        $upload = 1;
    } if (!file_exists($photo)){
        echo  "<script> prompt ('already exists.'); </script>";
        $upload = 0;
    } else if ($checkImageSize > 5000000000){
        echo  "too large.";
        $upload = 0;
        }

if ($upload = 1) {
    move_uploaded_file($_FILES["photo"]["tmp_name"], 'images/eleves/' . $_FILES['photo']['name']);
    }else {
        echo 'NON';
    }

    