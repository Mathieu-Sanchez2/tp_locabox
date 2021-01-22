<?php
include 'config/config.php';
//echo password_hash('azerty', PASSWORD_DEFAULT);

if (isset($_POST['connect'])){
    var_dump($_POST);
    if (empty($_POST['mail']) || empty($_POST['mot_de_passe'])){
        // error
        header('location:login.php');
        die;
    }
    $mail = $_POST['mail'];
    include 'config/bdd.php';
    $sql = 'SELECT * FROM utilisateur WHERE mail = "' . $mail . '"';
//    var_dump($sql);
    $req = $bdd->prepare($sql);
    $req->execute();
    $user = $req->fetch(PDO::FETCH_ASSOC);
//    var_dump($user);
    if ($user === null){
        // error
        header('location:login.php');
        die;
    }
    if (!password_verify($_POST['mot_de_passe'], $user['mot_de_passe'])){
        // error
        header('location:login.php');
        die;
    }
    $_SESSION['connect'] = true;
    unset($user['mot_de_passe']);
    $sqlRole = 'SELECT libelle FROM role_utilisateur INNER JOIN role ON role.id = role_utilisateur.id_role WHERE role_utilisateur.id_user =' . $user['id'];
    $req = $bdd->prepare($sqlRole);
    $req->execute();
    $rolesUser = $req->fetch(PDO::FETCH_ASSOC);
    $_SESSION['utilisateur'] = $user;
    $_SESSION['utilisateur']['roles'] = $rolesUser;
    header('location:index.php');
    die;
}

if (isset($_GET['logout'])){
    session_destroy();
    header('location:login.php');
    die;
}