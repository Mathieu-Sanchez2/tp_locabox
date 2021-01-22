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

 if (isset($_GET['id'])){
     $id = intval($_GET['id']);
     if ($id > 0){
         $sql = 'SELECT location.id AS id_location, client.id AS id_client, box.id AS id_box, date_debut, date_fin, contrat, nom, prenom, numero FROM location 
                INNER JOIN client ON location.id_client=client.id 
                INNER JOIN box ON location.id_box=box.id WHERE location.id = '.$id;
         $req = $bdd->prepare($sql);
         $req->execute();
         $location = $req->fetch(PDO::FETCH_ASSOC);
     }
 }

include '../include/head.php';
include '../include/sidebar.php';
include '../include/topbar.php';
?>

    <div class="container">
        <h1 class="text-center mt-4">Fiche Location</h1>
        <?php var_dump($location); ?>
    </div>

<?php
include '../include/footer.php';
include '../include/bottom.php';