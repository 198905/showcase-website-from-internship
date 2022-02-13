<?php 
$delete = $bdd->prepare('DELETE FROM `equipepedagogique` WHERE `id`= ?');
    if( isset( $_GET['id'] ) && $_GET['id'] !== '' ){
       $id = htmlspecialchars($_GET['id']);
        }
    $delete->execute(array($id));