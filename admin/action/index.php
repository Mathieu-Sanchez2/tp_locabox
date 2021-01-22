<?php
include '../config/config.php';
include '../config/bdd.php';

if (!isLogged()){
    header('location:'.URL_ADMIN.'login.php');
    die;
}

$sql = 'SELECT action_utilisateur.id AS id_action_user, action.id AS id_action, utilisateur.id AS id_user, client.id AS id_client, box.id AS id_box, actualite.id AS id_actualite, location.id AS id_location, utilisateur.nom AS nom_user, utilisateur.prenom AS prenom_user, action.libelle AS nom_action, action_utilisateur.date_modification AS date_action, client.nom AS nom_client, client.prenom AS prenom_client, box.numero AS numero_box, actualite.titre AS titre_actu
        FROM action_utilisateur
        LEFT JOIN action ON action_utilisateur.id_action = action.id 
        LEFT JOIN utilisateur ON action_utilisateur.id_utilisateur = utilisateur.id
        LEFT JOIN client ON action_utilisateur.id_client = client.id
        LEFT JOIN box ON action_utilisateur.id_box = box.id
        LEFT JOIN actualite ON action_utilisateur.id_actualite = actualite.id
        LEFT JOIN location ON action_utilisateur.id_location = location.id
';
$req = $bdd->prepare($sql);
$req->execute();
$actions = $req->fetchAll(PDO::FETCH_ASSOC);

include '../include/head.php';
include '../include/sidebar.php';
include '../include/topbar.php';
?>

    <div class="container">
        <h1 class="text-center mt-4">Index historique des actions</h1>
        <?php foreach ($actions as $index => $action): ?>
        <?php
            // GESTION COULEUR NOM ACTION
            if ($action['nom_action'] == 'ajouter'){
                $couleur = 'text-success';
            }elseif($action['nom_action'] == 'modifier'){
                $couleur = 'text-warning';
            }else{
                $couleur = 'text-danger';
            }
            // GESTION ACTION SUR QUOI
            if ($action['id_box'] !== null){
                $pronom = 'un ';
                $module = 'box';
            }elseif ($action['id_location'] !== null){
                $pronom = 'une ';
                $module = 'location';
            }elseif ($action['id_client'] !== null){
                $pronom = 'un ';
                $module = 'client';
            }else{
                $pronom = 'une ';
                $module = 'actualite';
            }
            $date = date_create($action['date_action']);
        ?>
        <p>
            L'utilisateur <a href="<?= URL_ADMIN . 'utilisateur/single.php?id='.$action['id_user'] ?>" class="text-decoration-none"><?= $action['nom_user'] .' '. $action['prenom_user']  ?></a>
            a <span class="<?= $couleur ?>"><?= $action['nom_action'] ?></span>
            <a href="<?= URL_ADMIN .$module .'/single.php?id='.$action['id_'.$module] ?>" class="text-decoration-none text-dark"><?= $pronom . $module ?></a>
            le <?= $date->format('d/m/Y') ?>
        </p>
        <?php endforeach; ?>
    </div>

<?php
include '../include/footer.php';
include '../include/bottom.php';
