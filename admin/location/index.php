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
$sql = 'SELECT location.id AS id_location, box.id AS id_box, client.id AS id_client, date_debut, date_fin, contrat, nom, prenom, adresse, code_postal, ville, numero, prix FROM location INNER JOIN client ON client.id = location.id_client INNER JOIN box ON box.id = location.id_box WHERE location.statut=0';
$req = $bdd->prepare($sql);
$req->execute();
$locations = $req->fetchAll(PDO::FETCH_ASSOC);
include '../include/head.php';
include '../include/sidebar.php';
include '../include/topbar.php';
?>

<div class="container">
    <h1 class="text-center mt-4">Index Location</h1>
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">Client</th>
            <th scope="col">Box</th>
            <th scope="col">Date début</th>
            <th scope="col">Date fin</th>
            <th scope="col">Durée de location</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($locations as $location): ?>
            <tr>
                <th scope="row"><a href="../client/single.php?id=<?= $location['id_client'] ?>"><?= $location['nom']. ' ' .$location['prenom'] ?></a></th>
                <td><a href="../box/single.php?id=<?= $location['id_box'] ?>"><?= $location['numero'] ?></a></td>
                <td>
                    <?php
                        $date_debut = date_create($location['date_debut']);
                        echo $date_debut->format('d/m/Y');
                    ?>
                </td>
                <td>
                    <?php
                        $date_fin = date_create($location['date_fin']);
                        echo $date_fin->format('d/m/Y');
                    ?>
                </td>
                <td>
                    <?php
                        $duree = $date_debut->diff($date_fin);
//                        var_dump($duree);die;
                        echo $duree->days . ' jour(s)';
                    ?>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?php
include '../include/footer.php';
include '../include/bottom.php';