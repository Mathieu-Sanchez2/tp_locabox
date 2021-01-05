<?php
include '../config/bdd.php';

if (isset($_POST['update_actu'])){
    var_dump($_POST);
    $sql = 'UPDATE actualite SET titre = "'. $_POST['titre'] .'", contenu = "'. $_POST['contenu'] .'", slug = "'. $_POST['slug'] .'"';
    $req = $bdd->prepare($sql);
    if ($req->execute()){
        header('location:index.php');
        die;
    }
}