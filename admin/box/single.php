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
//         var_dump($box);
    }
}

include '../include/head.php';
include '../include/sidebar.php';
include '../include/topbar.php';
?>

    <div class="container">
        <h1 class="text-center mt-4">Fiche Box</h1>
        <form action="" method="POST" class="text-center">
            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <label for="numero">Numéro :</label>
                        <input type="text" class="form-control" id="numero" name="numero" value="<?= $box['numero'] ?>" readonly>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label for="prix">Prix :</label>
                        <input type="text" class="form-control" id="prix" name="prix" value="<?= $box['prix'] ?>" readonly>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <label for="surface">Surface :</label>
                        <input type="text" class="form-control" id="surface" name="surface" value="<?= $box['surface'] ?>" readonly>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label for="volume">Volume :</label>
                        <input type="text" class="form-control" id="volume" name="volume" value="<?= $box['volume'] ?>" readonly>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <label for="disponiblite">Disponibilité :</label>
                        <?php $dispo = ($box['disponibilite'] === '0') ? 'disponible' : 'louer';  ?>
                        <input type="text" class="form-control" id="disponiblite" name="disponiblite" value="<?= $dispo ?>" readonly>
                    </div>
                </div>
            </div>
            <a href="update.php?id=<?= $box['id'] ?>" class="btn btn-warning"> modifier</a>
            <a href="index.php" class="btn btn-primary"> retour</a>
        </form>
    </div>

<?php
include '../include/footer.php';
include '../include/bottom.php';