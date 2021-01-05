<?php
include '../config/config.php';
include '../config/bdd.php';

if (isset($_GET['id'])){
    $id = intval($_GET['id']);
    if ($id > 0){
        $sql  = 'SELECT * FROM box WHERE id='.$id;
        $req = $bdd->prepare($sql);
        $req->execute();
        $box = $req->fetch(PDO::FETCH_ASSOC);
//        var_dump($box);
    }
}
include '../include/head.php';
include '../include/sidebar.php';
include '../include/topbar.php';
?>

    <div class="container">
        <h1 class="text-center mt-4">Update box</h1>
        <form action="action.php" method="POST" class="text-center">
            <input type="hidden" name="id" value="<?= $box['id'] ?>">
            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <label for="numero">Numéro :</label>
                        <input type="text" class="form-control" id="numero" name="numero" value="<?= $box['numero'] ?>">
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label for="prix">Prix :</label>
                        <input type="text" class="form-control" id="prix" name="prix" value="<?= $box['prix'] ?>">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <label for="surface">Surface :</label>
                        <input type="text" class="form-control" id="surface" name="surface" value="<?= $box['surface'] ?>">
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label for="volume">Volume :</label>
                        <input type="text" class="form-control" id="volume" name="volume" value="<?= $box['volume'] ?>">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <label for="disponiblite">Disponibilité :</label>
                        <?php $dispo = ($box['disponibilite'] === '0') ? 'disponible' : 'louer';  ?>
                        <input type="text" class="form-control" id="disponiblite" name="disponiblite" value="<?= $dispo ?>">
                    </div>
                </div>
            </div>
            <input type="submit" name="update_box" value="modifier" class="btn btn-warning">
            <a href="index.php" class="btn btn-primary"> retour</a>
        </form>
    </div>

<?php
include '../include/footer.php';
include '../include/bottom.php';
