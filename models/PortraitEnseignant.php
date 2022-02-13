<?php

$stmt = $bdd->prepare('SELECT * FROM equipepedagogique WHERE id=?');
;
if( isset( $_GET['id'] ) && $_GET['id'] !== '' ){
    $id = $_GET['id'];
   }
$stmt->execute(array($id));
