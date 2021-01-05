<?php

include '../config/config.php';
include '../config/bdd.php';

if (isset($_POST['add_user'])){
//    var_dump($_POST);
//    var_dump($_FILES);
//    die;
    $uploadfile = '../img/avatar/'.$_FILES["avatar"]["name"];
    if (!move_uploaded_file($_FILES['avatar']['tmp_name'], $uploadfile)){
        // 'ERROR !';
        header('location:add.php');
        die;
    }else{
        $avatar = $_FILES["avatar"]["name"];
    }

    $sql = 'INSERT INTO utilisateur VALUES(NULL,"'. $_POST['nom'] .'", "'. $_POST['prenom'] .'", "'. $_POST['mail'] .'","'. $_POST['mdp'] .'","'. $avatar .'", 0)';
//    var_dump($sql);
//    die;
    $req = $bdd->prepare($sql);
    if (!$req->execute()){
        // error
        header('location:add.php');
        die;
    }
    $id = $bdd->lastInsertId();
    foreach ($_POST['role'] as $role){
        $sqlRole = 'INSERT INTO role_utilisateur VALUES("'. $id .'", "'. $role .'")';
        $req = $bdd->prepare($sqlRole);
        $req->execute();
    }
    header('location:single.php?id='.$id);
}