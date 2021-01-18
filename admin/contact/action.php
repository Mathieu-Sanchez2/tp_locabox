<?php

include '../config/bdd.php';

if (isset($_POST['btn_reponse_contact'])){
//    var_dump($_POST);
    $mail = mail($_POST['mail'], $_POST['objet'], $_POST['reponse']);
    var_dump($mail);
    die;
    if (!$mail){
        // error
        header('location:repondre.php?id='.$_POST['id']);
        die;
    }
    $sql = 'UPDATE contact SET statut = 1 WHERE id = ' . $_POST['id'];
    $req = $bdd->prepare($sql);
    if (!$req->execute()){
        // error
        header('location:repondre.php?id='.$_POST['id']);
        die;
    }
    header('location:single.php?id='.$_POST['id']);
    die;
}