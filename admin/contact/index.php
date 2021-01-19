<?php
include '../config/config.php';

if (!isLogged()){
    header('location:'.URL_ADMIN.'login.php');
    die;
}

include '../config/bdd.php';

$sql = 'SELECT * FROM contact';
$req = $bdd->prepare($sql);
$req->execute();
$contacts = $req->fetchAll(PDO::FETCH_ASSOC);

include '../include/head.php';
include '../include/sidebar.php';
include '../include/topbar.php';
?>

<div class="container">
    <h1 class="text-center mt-4">Index Contact</h1>
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nom</th>
            <th scope="col">Prenom</th>
            <th scope="col">Mail</th>
            <th scope="col">Téléphone</th>
            <th scope="col">Objet</th>
            <th scope="col">Message</th>
            <th scope="col">Date</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
            <?php foreach ($contacts as $contact) : ?>
                <tr>
                    <th scope="row"><?= $contact['id'] ?></th>
                    <td><?= $contact['nom'] ?></td>
                    <td><?= $contact['prenom'] ?></td>
                    <td><?= $contact['mail'] ?></td>
                    <td><?= $contact['telephone'] ?></td>
                    <td><?= $contact['objet'] ?></td>
                    <td><?= substr($contact['message'], 0, 25); ?></td>
                    <td><?php $date = date_create($contact['date']); echo $date->format('d/m/Y'); ?></td>
                    <td>
                        <div class="dropdown">
                            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Actions
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="single.php?id=<?= $contact['id']  ?>">Fiche contact</a>
                                <a class="dropdown-item" href="repondre.php?id=<?= $contact['id']  ?>">Repondre</a>
                            </div>
                        </div>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?php
include '../include/footer.php';
include '../include/bottom.php';