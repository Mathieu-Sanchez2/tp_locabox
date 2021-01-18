<?php
include '../config/config.php';
include '../config/bdd.php';
include '../include/head.php';
include '../include/sidebar.php';
include '../include/topbar.php';

$limit = 10;
if (isset($_GET['offset'])){
    $offset = intval($_GET['offset']);
}else{
    $offset = 0;
 }

$sql = 'SELECT * FROM client WHERE statut = 0 ORDER BY id ASC LIMIT '. $limit .' OFFSET ' . $offset;
$req = $bdd->prepare($sql);
$req->execute();
$clients = $req->fetchAll(PDO::FETCH_ASSOC);
//var_dump($clients);

$sqlCount = 'SELECT count(id) AS nb FROM client WHERE statut = 0';
$req = $bdd->prepare($sqlCount);
$req->execute();
$count = $req->fetch(PDO::FETCH_ASSOC);
$nbPages = $count['nb'] / $limit;
$nbPages = ceil($nbPages);
//var_dump($nbPages);

?>

<div class="container-fluid">
    <h1 class="text-center mt-4">Index client</h1>
    <a href="action.php?reset=true" class="btn btn-warning my-4">RESET STATUT CLIENT</a>
    <div class="table-responsive">
        <table class="table table-sm table-hover">
            <thead>
            <tr>
                <th scope="col">Nom</th>
                <th scope="col">Prénom</th>
                <th scope="col">Adresse</th>
                <th scope="col">Mail</th>
                <th scope="col">Dénomination sociale</th>
                <th scope="col">Téléphone portable</th>
                <th scope="col">Actions</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($clients as $client): ?>
                <tr>
                    <th scope="row"><?= $client['nom'] ?></th>
                    <td><?= $client['prenom'] ?></td>
                    <td><?= $client['adresse'].' '.$client['code_postal'].', '.$client['ville'] ?></td>
                    <td><?= $client['mail'] ?></td>
                    <td><?= $client['denomination_sociale'] ?></td>
                    <td><?= $client['telephone_portable'] ?></td>
                    <td><div class="dropdown">
                            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Actions
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="single.php?id=<?= $client['id'] ?>">Fiche client</a>
                                <a class="dropdown-item" href="update.php?id=<?= $client['id'] ?>">Modifier</a>
                                <a class="dropdown-item" href="action.php?id=<?= $client['id'] ?>">Supprimer</a>
                            </div>
                        </div></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <li class="page-item">
                    <a class="page-link" href="index.php?offset=<?php echo $offset = $offset - $limit ?>" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>
                <?php for($i = 1; $i<=$nbPages; $i++): ?>
                    <li class="page-item"><a class="page-link" href="index.php?offset="><?= $i ?></a></li>
                <?php endfor;  ?>
                <li class="page-item">
                    <a class="page-link" href="index.php?offset=<?php echo $offset = $offset + $limit + 10 ?>" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</div>

<?php
include '../include/footer.php';
include '../include/bottom.php';