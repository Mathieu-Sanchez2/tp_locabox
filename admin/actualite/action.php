<?php
include '../config/config.php';
include '../config/bdd.php';

if (isset($_POST['update_actu'])){
    var_dump($_POST);
//    die;
    $sql = 'UPDATE actualite SET titre = "'. $_POST['titre'] .'", contenu = "'. $_POST['contenu'] .'", slug = "'. $_POST['slug'] .'" WHERE id ='.$_POST['id'];
    $req = $bdd->prepare($sql);
    if ($req->execute()){
        // GESTION ACTION
        $sql = 'INSERT INTO action_utilisateur VALUES (NULL, NULL, '.$_POST['id'].', NULL, NULL, '.$_SESSION['utilisateur']['id'].', 2, NOW())';
        $req = $bdd->prepare($sql);
        if (!$req->execute()){
            //error
            die('probleme action');
        }
        header('location:index.php');
        die;
    }
}

if (isset($_POST['add_actu'])){
//    var_dump($_POST);
//    var_dump($_FILES);
    $uploadfile = '../img/illustration/'.$_FILES["illustration"]["name"];
    if (!move_uploaded_file($_FILES['illustration']['tmp_name'], $uploadfile)){
        // 'ERROR !';
        header('location:add.php');
        die;
    }else{
        $illustration = $_FILES["illustration"]["name"];
    }
    // REDIMENSSION DE L'IMAGE

    $source = imagecreatefromjpeg('../img/illustration/'.$illustration.'');
//    var_dump($source);
//    die;
    // On crée la miniature vide
    $illustration_miniature = imagecreatetruecolor(250, 250);
    // renvoient la largeur et la hauteur d'une image
    $largeur_source = imagesx($source);
    $hauteur_source = imagesy($source);
    $largeur_destination = imagesx($illustration_miniature);
    $hauteur_destination = imagesy($illustration_miniature);

    // On genere la miniature
    imagecopyresampled($illustration_miniature, $source, 0, 0, 0, 0, $largeur_destination, $hauteur_destination, $largeur_source, $hauteur_source);
    // On l'enregistre dans uploads/mini/
    imagejpeg($illustration_miniature, "../img/illustration/mini/mini-".$illustration);
    $miniIllustration ="mini/mini-".$illustration;

    $sql = 'INSERT INTO actualite VALUES (NULL,"'.$_POST['titre'] .'", NOW(),"'.$_POST['contenu'] .'","'.$illustration .'","'. $miniIllustration.'","'.$_POST['slug'] .'", 0)';
    $req = $bdd->prepare($sql);
    if (!$req->execute()){
        // error
        header('location:add.php');
        die;
    }
    $id = $bdd->lastInsertId();
    // GESTION ACTION
    $sql = 'INSERT INTO action_utilisateur VALUES (NULL, NULL, '.$id.', NULL, NULL, '.$_SESSION['utilisateur']['id'].', 1, NOW())';
    $req = $bdd->prepare($sql);
    if (!$req->execute()){
        //error
        die('probleme action');
    }
    header('location:single.php?id='.$id);
    die;
}

if (isset($_GET['id'])){
    $id = intval($_GET['id']);
    if ($id >0){
        $sql = 'UPDATE actualite SET statut = 1 WHERE id ='.$id;
        $req = $bdd->prepare($sql);
        if ($req->execute()){
            // GESTION ACTION
            $sql = 'INSERT INTO action_utilisateur VALUES (NULL, NULL, '.$id.', NULL, NULL, '.$_SESSION['utilisateur']['id'].', 3, NOW())';
            $req = $bdd->prepare($sql);
            if (!$req->execute()){
                //error
                die('probleme action');
            }
            header('location:index.php');
            die;
        }
    }
}