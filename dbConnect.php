<?php
try {
    $bdd = new PDO('mysql:host=localhost;dbname=dlp;charset=utf8', 'root', '');
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $bdd->setAttribute(PDO::ATTR_EMULATE_PREPARES, FALSE);
    $bdd->setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND,'SET NAMES UTF8');
} catch(Exception $e) {
    echo 'Erreur : '.$e->getMessage();
}