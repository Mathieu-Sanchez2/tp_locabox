<?php
include '../config/config.php';
include '../config/bdd.php';

if (isset($_GET['id'])){
    $id = intval($_GET['id']);
    if ($id > 0){
        $sql = 'SELECT * FROM actualite WHERE id='.$id;
        $req = $bdd->prepare($sql);
        $req->execute();
        $actualite = $req->fetch(PDO::FETCH_ASSOC);
    }
}

include '../include/head.php';
include '../include/sidebar.php';
include '../include/topbar.php';
?>

    <div class="container">
        <h1 class="text-center mt-4">Update actualite</h1>
        <form action="action.php" method="POST" class="text-center">
            <input type="hidden" name="id" value="<?= $actualite['id'] ?>">
            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <label for="titre">Titre :</label>
                        <input type="text" class="form-control" id="titre" name="titre" value="<?= $actualite['titre'] ?>">
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label for="slug">Slug :</label>
                        <input type="text" class="form-control" id="slug" name="slug" value="<?= $actualite['slug'] ?>">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="illustration">Illustration :</label>
                        <img src="<?= $actualite['illustration'] ?>" alt="">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="contenu">Contenu :</label>
                <textarea name="contenu" id="contenu" cols="30" rows="10"><?= $actualite['contenu'] ?></textarea>
            </div>
            <input type="submit" name="update_actu" value="modifier" class="btn btn-warning">
            <a href="index.php" class="btn btn-primary"> retour</a>
        </form>
    </div>

<?php
include '../include/footer.php';
include '../include/bottom.php';
