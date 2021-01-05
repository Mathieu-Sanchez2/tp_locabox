<?php

include '../config/config.php';
include '../config/bdd.php';

if (isset($_POST['add_box'])){
//    var_dump($_POST);
    $sql = 'INSERT INTO box (numero,prix,surface,volume, disponibilite, statut) VALUES ("'. $_POST['numero'] .'",'. $_POST['prix'] .','. $_POST['surface'] .','. $_POST['volume'] .', 0, 0)';
//    var_dump($sql);
//    die;
    $req = $bdd->prepare($sql);
    if (!$req->execute()){
        // error
        $_SESSION['add_box'] = false;
        header('location:add.php');
    }
    $_SESSION['add_box'] = true;
    header('location:index.php');
}

if (isset($_GET['id'])){
    $id = intval($_GET['id']);
    if ($id > 0){
        $sql = 'UPDATE box SET statut = 1 WHERE id='.$id;
        $req = $bdd->prepare($sql);
        if ($req->execute()){
            $_SESSION['delete_box'] = false;
            header('location:index.php');
        }
        $_SESSION['delete_box'] = true;
        header('location:index.php');
    }

}

if (isset($_POST['update_box'])){
//    var_dump($_POST);
    $sql = 'UPDATE box SET numero="' . $_POST['numero'] . '", surface="' . $_POST['surface'] . '", volume="' . $_POST['volume'] . '", disponibilite=0 WHERE id=' . $_POST['id'];
    var_dump($sql);
    $req = $bdd->prepare($sql);
    if (!$req->execute()){
        // error
        $_SESSION['update_box'] = false;
        header('location:update.php?id='.$_POST['id']);
    }
    $_SESSION['update_box'] = true;
    header('location:single.php?id='.$_POST['id']);
}