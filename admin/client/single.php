<?php
include '../config/config.php';
include '../config/bdd.php';
include '../include/head.php';
include '../include/sidebar.php';
include '../include/topbar.php';

if (isset($_GET['id'])){
    $id = intval($_GET['id']);
    if ($id <= 0){
        // error sur l'id
        die('id incorrect');
    }
    $sql = 'SELECT * FROM client  WHERE id='.$id;
    $req = $bdd->prepare($sql);
    $req->execute();
    $client = $req->fetch(PDO::FETCH_ASSOC);
}
?>

    <div class="container">
        <h1 class="text-center mt-4">Fiche client</h1>
        <div class="container mt-4">
            <form action="" method="POST" class="text-center mt-4">
            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <label for="nom">Nom :</label>
                        <input type="text" class="form-control" id="nom" name="nom" value="<?= $client['nom'] ?>" readonly>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label for="prenom">Prénom :</label>
                        <input type="text" class="form-control" id="prenom" name="prenom" value="<?= $client['prenom'] ?>" readonly>
                    </div>
                </div>
            </div>
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="mail">Mail :</label>
                            <input type="text" class="form-control" id="mail" name="mail" value="<?= $client['mail'] ?>" readonly>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="adresse">Adresse :</label>
                            <input type="text" class="form-control" id="adresse" name="adresse" value="<?= $client['adresse']. ', ' .$client['code_postal']. ' '.$client['ville'] ?>" readonly>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="tel_port">Téléphone portable :</label>
                            <input type="text" class="form-control" id="tel_port" name="tel_port" value="<?= $client['telephone_portable'] ?>" readonly>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="tel_fixe">Téléphone fixe :</label>
                            <input type="text" class="form-control" id="tel_fixe" name="tel_fixe" value="<?= $client['telephone_fixe'] ?>" readonly>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="denomination_sociale">Dénomination sociale :</label>
                            <input type="text" class="form-control" id="denomination_sociale" name="denomination_sociale" value="<?= $client['denomination_sociale'] ?>" readonly>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="siret">N° SIRET :</label>
                            <input type="text" class="form-control" id="siret" name="siret" value="<?= $client['siret'] ?>" readonly>
                        </div>
                    </div>
                </div>
                <a href="update.php?id=<?= $client['id']; ?>" class="btn btn-warning">Modifier</a>
                <a href="index.php" class="btn btn-primary"> retour</a>
            </form>
        </div>
    </div>

<?php
include '../include/footer.php';
include '../include/bottom.php';