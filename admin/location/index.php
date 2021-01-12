<?php
include '../config/config.php';
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
                    <?= $location['date_debut'] ?>
                </td>
                <td>
                    <?= $location['date_fin'] ?>
                </td>
                <td>

                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?php
include '../include/footer.php';
include '../include/bottom.php';