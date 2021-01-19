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

$sql = 'SELECT * FROM utilisateur WHERE statut = 0';
$req = $bdd->prepare($sql);
$req->execute();
$utilisateurs = $req->fetchAll(PDO::FETCH_ASSOC);
//var_dump($utilisateurs);
?>

<div class="container">
    <h1 class="text-center mt-4">Index User</h1>
    <table class="table table-hover">
        <thead>
        <tr class="text-center">
            <th scope="col">avatar</th>
            <th scope="col">Nom</th>
            <th scope="col">Prenom</th>
            <th scope="col">Mail</th>
            <th scope="col">Actions</th>
        </tr>
        </thead>
        <tbody class="text-center">
            <?php foreach ($utilisateurs as $utilisateur): ?>
                <tr>
                    <td><img src="<?= URL_ADMIN . '/img/avatar/' . $utilisateur['avatar'] ?>" alt="user" width="45px" height="45px"></td>
                    <th scope="row"><a href="single.php?id=<?= $utilisateur['id'] ?>" class="text-body text-decoration-none"><?= $utilisateur['nom'] ?></a></th>
                    <td><?= $utilisateur['prenom'] ?></td>
                    <td><?= $utilisateur['mail'] ?></td>
                    <td><div class="dropdown">
                            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                actions
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="single.php?id=<?= $utilisateur['id']; ?>">Fiche utilisateur</a>
                                <a class="dropdown-item" href="update.php?id=<?= $utilisateur['id']; ?>">Modifier l'utilisateur</a>
                                <a class="dropdown-item" href="action.php?id=<?= $utilisateur['id']; ?>">Supprimer l'utilisateur</a>
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