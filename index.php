<?php

require ('ctrlr/controller.php');

if (isset($_GET['action']) && $_GET['action'] !==''){

     if ($_GET['action'] == '') {
        accueil();
    }
    else if ($_GET['action'] == 'authentificationAdmin') {
        authentificationAdmin();
    }
    else if ($_GET['action'] == 'accueil') {
            accueil();
        }   
    else if ($_GET['action'] == 'admissions') {
            admissions();
        }   
    else if ($_GET['action'] == 'backOfficeActualites' && (isset($_SESSION['mail'])) ) {
            backOfficeActualites();
        }
    else if ($_GET['action'] == 'ateliersdecouverte') {
            ateliersDecouverte();
        }
    else if ($_GET['action'] == 'nosDisciplines') {
            nosDisciplines();
        }
    else if ($_GET['action'] == 'deconnexion') {
            unset($_SESSION['mail']);
            accueil();
        }
    else if ($_GET['action'] == 'presseEtMultimedia') {
            presseEtMultimedia();
        }
    else if ($_GET['action'] == 'portraitsDanciens') {
            portraits();
        }
    else if ($_GET['action'] == 'pasBesoinDeParlerRusse') {
            pasBesoinDeParlerRusse();
        }
    else if ($_GET['action'] == 'portraitDanciensIndividuelV' && $_GET['id'] !== htmlspecialchars('')){
            portraitIndividuel();
        }
    else if ($_GET['action'] == 'portraitEnseignant' && $_GET['id'] !== htmlspecialchars('')){
            portraitEnseignant();
        }
    else if ($_GET['action'] == 'actualites') {
            actualites();
        }
    else if ($_GET['action'] == 'equipePedagogique' ) {
            equipePedagogique();
        }
    else if ($_GET['action'] == 'contenuPedagogique') {//ok
            contenuPedagogique();
        }
    else if ($_GET['action'] == 'backOfficeFicheCulture' && (isset($_SESSION['mail']))) {
            backOfficeFicheCulture();
        }
    else if ($_GET['action'] == 'backOfficeProfil' && (isset($_SESSION['mail']))) {
            backOfficeProfil();
        }
    else if ($_GET['action'] == 'portraitDanciensModifier' && (isset($_SESSION['mail'])) && htmlspecialchars($_GET['id']) !== '') {
            backOfficeProfilUpdate();
        }
    else if ($_GET['action'] == 'portraitsDanciensSupprimer' && htmlspecialchars($_GET['id']) !== '' && (isset($_SESSION['mail'])) ) {
            backOfficeProfileCancel();
        }
    else if ($_GET['action'] == 'seCultiver') {
           seCultiver();
        }
    else if ($_GET['action'] == 'inscriptionAdministrateur') {
           inscriptionAdministrateur();
        }
    else if ($_GET['action'] == 'masterClass') {
            masterClass();
        }
    else if($_GET['action'] == 'cancelProfile') {
            ProfileCancel();
        }
    else if($_GET['action'] == 'TeacherCancel') {
            TeacherCancel();
        }
    else if ($_GET['action'] == 'Partenaires') {
           partenaires();
        }
    else if ($_GET['action'] == 'formations') {
           formations();
        }
    else if ($_GET['action'] == 'stage1Mois') {
           stage1Mois();
        }
    else if ($_GET['action'] == 'programmeMaghreb') {
           programmeMaghreb();
        }
    else {
        error404();
    }
}
