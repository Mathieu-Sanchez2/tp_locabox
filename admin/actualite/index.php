<?php
include '../config/config.php';

if (!isLogged()){
    header('location:'.URL_ADMIN.'login.php');
    die;
}

include '../config/bdd.php';
include '../include/head.php';
include '../include/sidebar.php';
include '../include/topbar.php';
 $sql = 'SELECT * FROM actualite WHERE statut = 0';
 $req = $bdd->prepare($sql);
 $req->execute();
 $actualites = $req->fetchAll(PDO::FETCH_ASSOC);
// var_dump($actualites);
?>

<div class="container">
    <h1 class="text-center mt-4">Index Actualite</h1>
    <table class="table table-hover">
        <thead>
        <tr>
            <th scope="col">Titre</th>
            <th scope="col">Contenu</th>
            <th scope="col">Slug</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($actualites as $actualite): ?>
            <tr>
                <th scope="row"><?= $actualite['titre'] ?></th>
                <td><?= substr($actualite['contenu'],0,75) ?></td>
                <td><?= $actualite['slug'] ?></td>
                <td><div class="dropdown">
                        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            actions
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="single.php?id=<?= $actualite['id']; ?>">Fiche actualité</a>
                            <a class="dropdown-item" href="update.php?id=<?= $actualite['id']; ?>">Modifier l'actualité</a>
                            <a class="dropdown-item" href="action.php?id=<?= $actualite['id']; ?>">Supprimer l'actualité'</a>
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