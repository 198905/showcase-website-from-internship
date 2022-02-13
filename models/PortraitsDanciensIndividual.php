<?php

$stmt = $bdd->prepare('SELECT * FROM eleves WHERE id=?');
;
if( isset( $_GET['id'] ) && $_GET['id'] !== '' ){
    $id = htmlspecialchars($_GET['id']);
   }
$stmt->execute(array($id));
