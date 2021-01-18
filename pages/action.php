<?php
include '../admin/config/bdd.php';

if (isset($_POST['btn_contact'])){
    var_dump($_POST);
    $sql = 'INSERT INTO contact VALUES (NULL, "'. $_POST['nom'] .'", "'. $_POST['prenom'] .'","'. $_POST['mail'] .'","'. $_POST['telephone'] .'", "'. $_POST['objet'] .'", "'. $_POST['message'] .'", NOW(), 0)';
//    var_dump($sql);
    $req  = $bdd->prepare($sql);
    if (!$req->execute()){
        //error
        header('location:contact.php');
        die;
    }
    // gestion success
    header('location:contact.php');
    die;
}