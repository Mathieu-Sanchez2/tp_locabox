<?php
include '../config/config.php';

if (!isLogged()){
    header('location:'.URL_ADMIN.'login.php');
    die;
}

include '../config/bdd.php';


$sqlRoles = 'SELECT * FROM role';
$reqRoles = $bdd->prepare($sqlRoles);
$reqRoles->execute();
$roles = $reqRoles->fetchAll(PDO::FETCH_ASSOC);

include '../include/head.php';
include '../include/sidebar.php';
include '../include/topbar.php';
?>

    <div class="container">
        <h1 class="text-center mt-4">Add User</h1>
        <form action="action.php" method="POST" class="text-center" enctype="multipart/form-data">
            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <label for="nom">Nom :</label>
                        <input type="text" class="form-control" id="nom" name="nom" value="">
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label for="prenom">Prénom :</label>
                        <input type="text" class="form-control" id="prenom" name="prenom" value="">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <label for="mail">Mail :</label>
                        <input type="text" class="form-control" id="mail" name="mail" value="">
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label for="mdp">Mot de passe :</label>
                        <input type="password" class="form-control" id="mdp" name="mdp" value="">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <label for="avatar">Avatar :</label>
                        <input type="file" class="form-control-file" name="avatar" id="avatar">
                    </div>
                </div>
                <div class="col-6">
                    <label for="role">Rôle(s) :</label>
                    <select class="form-control user-role" id="role" name="role[]" multiple="multiple">
                        <?php  foreach ($roles as $role): ?>
                            <option value="<?= $role['id'] ?>"><?= $role['libelle'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
            <input type="submit" name="add_user" value="créer" class="btn btn-success">
            <a href="index.php" class="btn btn-primary">retour</a>
        </form>
    </div>

<?php
include '../include/footer.php';
include '../include/bottom.php';