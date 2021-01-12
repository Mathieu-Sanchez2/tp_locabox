<?php
include '../config/config.php';
include '../config/bdd.php';

if (isset($_GET['id'])){
    $id = intval($_GET['id']);
    if ($id > 0){
        $sql  = 'SELECT * FROM utilisateur WHERE id='.$id;
        $req = $bdd->prepare($sql);
        $req->execute();
        $utilisateur = $req->fetch(PDO::FETCH_ASSOC);
//         var_dumpd$utilisateur);
        $sqlRoles = 'SELECT * FROM role';
        $reqRoles = $bdd->prepare($sqlRoles);
        $reqRoles->execute();
        $roles = $reqRoles->fetchAll(PDO::FETCH_ASSOC);
//        var_dump($roles);
        $sqlRolesUser = 'SELECT * FROM role_utilisateur  WHERE role_utilisateur.id_user = '.$id;
        $sqlRolesUser = $bdd->prepare($sqlRolesUser);
        $sqlRolesUser->execute();
        $rolesUser = $sqlRolesUser->fetchAll(PDO::FETCH_ASSOC);
//        var_dump($rolesUser);
        foreach ($rolesUser as $role) {
            $rolesId[] = $role['id_role'];
        }
//        var_dump($rolesId);
//        die();
    }
}
include '../include/head.php';
include '../include/sidebar.php';
include '../include/topbar.php';
?>

    <div class="container">
        <h1 class="text-center mt-4">Update user</h1>
        <form action="" method="POST" class="text-center">
            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <label for="nom">Nom :</label>
                        <input type="text" class="form-control" id="nom" name="nom" value="<?= $utilisateur['nom'] ?>">
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label for="prenom">Prénom :</label>
                        <input type="text" class="form-control" id="prenom" name="prenom" value="<?= $utilisateur['prenom'] ?>">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <label for="mail">Mail :</label>
                        <input type="text" class="form-control" id="mail" name="mail" value="<?= $utilisateur['mail'] ?>">
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label for="role">Rôle(s) :</label>
                        <select class="form-control user-role" id="role" name="role[]" multiple="multiple">
                            <?php  foreach ($roles as $role):
                                if (in_array($role["id"],$rolesId)) {
                                    $selected='selected';
                                }else {
                                    $selected='';
                                }?>
                                <option value="<?= $role['id'] ?>" <?= $selected ?>><?= $role['libelle'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
            </div>
            <input type="submit" name="update_user" class="btn btn-warning" value="modifier">
            <a href="index.php" class="btn btn-primary"> retour</a>
        </form>
    </div>

<?php
include '../include/footer.php';
include '../include/bottom.php';
