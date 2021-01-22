<?php
include '../config/config.php';

if (!isLogged()){
    header('location:'.URL_ADMIN.'login.php');
    die;
}
if (!isSuperAdmin() || !isSalarie()){
    header('location:'.URL_ADMIN.'index.php');
    die;
}
include '../config/bdd.php';
$sql = 'SELECT location.id AS id_location, box.id AS id_box, client.id AS id_client, date_debut, date_fin, contrat, nom, prenom, adresse, code_postal, ville, numero, prix FROM location INNER JOIN client ON client.id = location.id_client INNER JOIN box ON box.id = location.id_box';
$req = $bdd->prepare($sql);
$req->execute();
$locations = $req->fetchAll(PDO::FETCH_ASSOC);
include '../include/head.php';
include '../include/sidebar.php';
include '../include/topbar.php';
?>

    <div class="container">
        <h1 class="text-center mt-4">Historique Location</h1>
        <?php var_dump($locations); ?>
    </div>

<?php
include '../include/footer.php';
include '../include/bottom.php';