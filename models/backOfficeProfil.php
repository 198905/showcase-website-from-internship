<?php   
$sql='INSERT INTO `eleves` (`nom`, `prenom`, `photo`, `description`) 
        VALUES  (:nom, :prenom, :photo, :description)';

$nom=addslashes(htmlspecialchars($_POST["nom"]));
$prenom=addslashes(htmlspecialchars($_POST["prenom"]));
$description=addslashes(htmlspecialchars($_POST["description"]));  
$photo = 'images/eleves/' . pathinfo($_FILES['photo']['name'], PATHINFO_FILENAME);
$query = $bdd->prepare($sql);

$query->bindvalue(':nom', $nom);
$query->bindvalue(':prenom', $prenom);
$query->bindvalue(':description', $description);
$query->bindvalue(':photo', $photo);
$query->execute();
//Envoi de l'image:
$folder="images/eleves/";
$ImageSize = $_FILES["photo"]["size"];
$target_file = $folder . basename($_FILES["photo"]["name"]);
$imageFileType = pathinfo(($_FILES["photo"]["name"]),PATHINFO_EXTENSION);

if(isset($_POST["submit"])) {
        if (file_exists($target_file)){
            echo  "<script> alert('La photo existe déjà.'); </script>";
            $upload = false;
        } else if ($ImageSize > 5000000){
            echo  "<script> alert('Taille trop importante.'); </script>";
            $upload = false;
        } else if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
            echo "<script> alert('Les fichiers acceptés doivent être en .jpg, .jpeg, .png ou .gif. '); </script>";
            $upload = false;  
        }
    }
    if ($upload = 1) {
        move_uploaded_file($_FILES["photo"]["tmp_name"], 'images/eleves/' . $_FILES['photo']['name']);
        echo  "<script> alert('Ajouté: $nom . '' . $prenom . '' . Vous pouvez le modifier à tout moment.'); </script>";
    }
