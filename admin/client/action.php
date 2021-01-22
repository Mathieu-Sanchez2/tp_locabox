<?php
include "../config/config.php";
include "../config/bdd.php";

if (isset($_GET['id'])){
    $id = intval($_GET['id']);
    if ($id <= 0){
        // error
        die('id incorrect');
    }
    $sql = 'UPDATE client SET statut = 1 WHERE id='.$id;
    $req = $bdd->prepare($sql);
    if (!$req->execute()){
        $_SESSION['client_delete'] = false;
        header('location:index.php');
    }
    // GESTION ACTION
    $sql = 'INSERT INTO action_utilisateur VALUES (NULL, NULL, NULL, NULL, '.$id.', '.$_SESSION['utilisateur']['id'].', 3, NOW())';
    $req = $bdd->prepare($sql);
    if (!$req->execute()){
        //error
        die('probleme action');
    }
    $_SESSION['client_delete'] = true;
    header('location:index.php');
}

if (isset($_GET['reset'])){
    $sql = 'UPDATE client SET statut = 0';
    $req = $bdd->prepare($sql);
    $req->execute();
    header('location:index.php');
}

if (isset($_POST['edit_client'])){
    $sql = 'UPDATE client SET nom="' . $_POST['nom'] . '", prenom="' . $_POST['prenom'] . '", mail="' . $_POST['mail'] . '",telephone_portable="' . $_POST['tel_port'] . '", telephone_fixe="' . $_POST['tel_fixe'] . '",adresse="' . $_POST['adresse'] . '", ville="' . $_POST['ville'] . '", code_postal="' . $_POST['code_postal'] . '", siret="' . $_POST['siret'] . '",denomination_sociale="' . $_POST['denomination_sociale'] . '" WHERE id=' . $_POST['id'];
    var_dump($sql);
    $req = $bdd->prepare($sql);
    if (!$req->execute()){
        // error
        $_SESSION['update_client'] = false;
        header('location:single.php?id='.$_POST['id']);
    }
    // GESTION ACTION
    $sql = 'INSERT INTO action_utilisateur VALUES (NULL, NULL, NULL, NULL, '.$_POST['id'].', '.$_SESSION['utilisateur']['id'].', 2, NOW())';
    $req = $bdd->prepare($sql);
    if (!$req->execute()){
        //error
        die('probleme action');
    }
    $_SESSION['update_client'] = true;
    header('location:single.php?id='.$_POST['id']);
}

if (isset($_POST['add_client'])){
    var_dump($_POST);

    $sql = 'INSERT INTO client (nom, prenom, mail, telephone_portable, telephone_fixe, adresse, ville, code_postal, siret, denomination_sociale) VALUES ("'. $_POST['nom'] .'","'. $_POST['prenom'] .'","'. $_POST['mail'] .'","'. $_POST['tel_port'] .'","'. $_POST['tel_fixe'] .'","'. $_POST['adresse'] .'","'. $_POST['ville'] .'","'. $_POST['code_postal'] .'","'. $_POST['siret'] .'","'. $_POST['denomination_sociale'] .'")';
    var_dump($sql);
    $req = $bdd->prepare($sql);
    if (!$req->execute()){
        // error
        $_SESSION['add_client'] = false;
        header('location:add.php');
    }
    $id = $bdd->lastInsertId();
    $sql = 'INSERT INTO action_utilisateur VALUES (NULL, NULL, NULL, NULL, '.$id.', '.$_SESSION['utilisateur']['id'].', 1, NOW())';
    $req = $bdd->prepare($sql);
    if (!$req->execute()){
        //error
        die('probleme action');
    }
    $_SESSION['add_client'] = true;
    header('location:index.php');
}