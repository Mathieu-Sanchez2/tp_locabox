<?php
include '../config/config.php';
include '../config/bdd.php';
include '../include/head.php';
include '../include/sidebar.php';
include '../include/topbar.php';

$sql = 'SELECT * FROM box WHERE statut = 0 AND disponibilite = 0';
$req = $bdd->prepare($sql);
$req->execute();
$boxs = $req->fetchAll(PDO::FETCH_ASSOC);
//var_dump($boxs);
?>

    <div class="container">
        <h1 class="text-center mt-4">Box disponible</h1>
        <table class="table table-hover">
            <thead>
            <tr class="text-center">
                <th scope="col">Numéro</th>
                <th scope="col">Surface</th>
                <th scope="col">Volume</th>
                <th scope="col">Prix</th>
                <th scope="col">Disponibilité</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody class="text-center">
            <?php foreach ($boxs as $box): ?>
                <tr>
                    <th scope="row"><a href="single.php?id=<?= $box['id'] ?>" class="text-body text-decoration-none"><?= $box['numero'] ?></a></th>
                    <td><?= $box['surface'] ?> m<sup>2</sup></td>
                    <td><?= $box['volume'] ?> m<sup>3</sup></td>
                    <td><?= $box['prix'] ?> €</td>
                    <?php if ($box['disponibilite'] === '0'): ?>
                        <td class="bg-success text-center">disponible</td>
                    <?php else: ?>
                        <td class="bg-danger text-center"><a href="<?= URL_ADMIN; ?>/location/single.php" class="text-body text-decoration-none">louer</a></td>
                    <?php endif; ?>
                    <td><div class="dropdown">
                            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                actions
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="single.php?id=<?= $box['id']; ?>">Fiche box</a>
                                <a class="dropdown-item" href="update.php?id=<?= $box['id']; ?>">Modifier le box</a>
                                <a class="dropdown-item" href="action.php?id=<?= $box['id']; ?>">Supprimer le box</a>
                            </div>
                        </div></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>

<?php
include '../include/footer.php';
include '../include/bottom.php';