
<?php

include '../config/config.php';
include '../config/bdd.php';

if (isset($_POST['add_location'])){
    var_dump($_POST);
    $date_debut = date_create($_POST['date_debut']);
    $date_debut = $date_debut->format('Y-m-d h:m:s');
    $date_fin = (empty($_POST['date_fin'])) ?  null : date_create($_POST['date_fin']);
    $date_fin = (is_null($date_fin)) ? 'NULL' : $date_fin->format('Y-m-d h:m:s');
//    var_dump($date_debut, $date_fin);
//    die;
    $sql = 'INSERT INTO location VALUES (NULL, "'.$_POST['client'].'","'.$_POST['box'].'","'.$date_debut.'","'.$date_fin.'", NULL, 0)';
//    var_dump($sql);
//    die;
    $req = $bdd->prepare($sql);
    if (!$req->execute()){
        //error
        header('location:add.php');
        die;
    }
    $id = $bdd->lastInsertId();
    $sqlBox = 'UPDATE box SET disponibilite = 1 WHERE id='.$_POST['box'];
    $reqBox = $bdd->prepare($sqlBox);
    if (!$reqBox->execute()){
        //error
        header('location:add.php');
        die;
    }
    header('location:single.php?id='.$id);
}