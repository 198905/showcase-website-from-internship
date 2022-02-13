<?php
session_start();
require('models/model.php');

function backOfficeActualites() { 
    require ('vues/backOfficeActualitesView.php');
    if (!empty($_POST['titre']) && !empty($_POST['texte']) && !empty($_POST['photo'])) {
        require('dbConnect.php');
        require ('backOfficeActualitesModele.php');
    }
}
function accueil() {  
    require('dbConnect.php');
    require('models/indexModele.php');
    require('vues/indexView.php');
}
function authentificationAdmin() {
    if (!empty($_POST['mail']) && !empty($_POST['pass'])) {
        require('dbConnect.php');
        require('models/authModele.php');
    }else {
        echo 'pseudo ET Mot de passe';
    }
    require ('vues/authView.php');
}
function presseEtMultimedia() {
    require('dbConnect.php');
    require('models/presseEtMultimedia.php');
    require ('vues/presseEtMultimedia.php');
}
function contenuPedagogique() {
    require ('vues/contenuPedagogique.php');
}
function programmeMaghreb() {
    require ('vues/programmeMaghreb.php');
}
function ateliersDecouverte() {
    require ('vues/ateliersDecouverte.php');
}
function admissions() {
    require ('vues/admissions.php');
}
function error404() {
    require ('vues/404.php');
}
function stage1Mois() {
    require ('vues/stage1Mois.php');
}
function masterClass() {
    require ('vues/masterClass.php');
}
function pasBesoinDeParlerRusse() {
    require ('vues/pasBesoinDeParlerRusse.php');
}
function nosDisciplines() {
    require ('vues/nosDisciplines.php');
}
function SeCultiver() {
    require ('dbConnect.php');
    require ('models/SeCultiver.php');
    require ('vues/SeCultiver.php');
}
function demainLePrintemps() {
    require ('vues/demainLePrintemps.php');
}
function formations() {
    require ('vues/formations.php');
}
function portraits() {
    require ('dbConnect.php');
    require ('models/portraitsDanciensModel.php');
    require ('vues/portraitsDanciens.php');
}
function portraitIndividuel() {
    require ('dbConnect.php');
    require ('models/PortraitsDanciensIndividual.php');
    require ('vues/portraitDancienIndividuelV.php');
}

function portraitEnseignant() {
    require ('dbConnect.php');
    require ('models/portraitEnseignant.php');
    require ('vues/portraitEnseignant.php');
}
function backOfficeportraitEnseignantUpdate() { 
    require ('vues/backOfficeUpdateProfil.php');
    if (!empty($_POST['nom']) || !empty($_POST['prenom']) || !empty($_POST['description'])) {
    require('dbConnect.php');
    require ('models/backOfficeProfil.php');
    }
}
function backOfficeportraitEnseignantSCancel() { 
    require ('vues/backOfficeCancelProfil.php');
    if (!empty($_POST['nom']) || !empty($_POST['prenom']) || !empty($_POST['description'])) {
    require('dbConnect.php');
    require ('models/backOfficeProfil.php');
    }
}
function actualites() {
    require ('dbConnect.php');
    require ('models/actualitesM.php');
    require ('vues/actualites.php');
}
function backOfficeFicheCulture() { 
    require ('vues/backOfficeFicheCulture.php');
    if (!empty($_POST['titre']) && !empty($_POST['texte']) && !empty($_POST['photo'])) {
    require('dbConnect.php');
    require ('models/backOfficeFicheCulture.php');
    }
}
function backOfficeProfil() { 
    require ('vues/backOfficeProfil.php');
    if (!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['description'])) {
    require('dbConnect.php');
    require ('models/backOfficeProfil.php');
    }
}
function backOfficeProfilUpdate() { 
    require ('vues/backOfficeUpdateProfil.php');
    if (!empty($_POST['nom']) || !empty($_POST['prenom']) || !empty($_POST['description']) || !empty($_FILES['photo'])) {
    require('dbConnect.php');
    require ('models/backOfficeUpdateProfile.php');
    }
}
function backOfficeProfileCancel() { 
    require ('dbConnect.php');
    require ('models/backOfficeCancelProfile.php');
    require ('vues/backOfficeCancelProfile.php');
}
function ProfileCancel() { 
    require ('dbConnect.php');
    require ('models/cancelProfile.php');
    require ('vues/cancelProfile.php');

}
function TeacherCancel() { 
    require ('dbConnect.php');
    require ('models/cancelTeacher.php');
    require ('vues/cancelTeacher.php');
}
function equipePedagogique() {
    require ('dbConnect.php');
    require ('models/equipePedagogique.php');
    require ('vues/equipePedagogique.php');
    }
function inscriptionAdministrateur() {
    require('dbConnect.php');
    require('vues/inscriptionAdministrateur.php');
    if(isset($_POST["name"], $_POST["pass"], $_POST["mail"]) 
    && !empty($_POST["name"]) && !empty($_POST["pass"]) && !empty($_POST["mail"])) { 
    require('models/inscriptionAdministrateur.php');
    }
}

