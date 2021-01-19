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

if (isset($_GET['id'])){
    $id = intval($_GET['id']);
    if ($id <= 0){
        // error
        die('id incorrect');
    }
    $sql = 'SELECT * FROM client WHERE id='.$id;
    $req = $bdd->prepare($sql);
    $req->execute();
    $client = $req->fetch(PDO::FETCH_ASSOC);
}
?>

    <div class="container">
        <h1 class="text-center mt-4">Update client</h1>
        <div class="container mt-4">
            <form action="action.php" method="POST" class="text-center mt-4">
                <input type="hidden" name="id" value="<?= $client['id']; ?>">
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="nom">Nom :</label>
                            <input type="text" class="form-control" id="nom" name="nom" value="<?= $client['nom'] ?>">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="prenom">Prénom :</label>
                            <input type="text" class="form-control" id="prenom" name="prenom" value="<?= $client['prenom'] ?>">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-3">
                        <div class="form-group">
                            <label for="mail">Mail :</label>
                            <input type="text" class="form-control" id="mail" name="mail" value="<?= $client['mail'] ?>">
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="form-group">
                            <label for="adresse">Adresse :</label>
                            <input type="text" class="form-control" id="adresse" name="adresse" value="<?= $client['adresse'] ?>">
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="form-group">
                            <label for="code_postal">Code Postal :</label>
                            <input type="text" class="form-control" id="code_postal" name="code_postal" value="<?= $client['code_postal']; ?>">
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="form-group">
                            <label for="ville">Ville :</label>
                            <input type="text" class="form-control" id="ville" name="ville" value="<?= $client['ville']; ?>">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="tel_port">Téléphone portable :</label>
                            <input type="text" class="form-control" id="tel_port" name="tel_port" value="<?= $client['telephone_portable'] ?>">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="tel_fixe">Téléphone fixe :</label>
                            <input type="text" class="form-control" id="tel_fixe" name="tel_fixe" value="<?= $client['telephone_fixe'] ?>">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="siret">N° SIRET :</label>
                            <input type="text" class="form-control" id="siret" name="siret" value="<?= $client['siret'] ?>">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="denomination_sociale">Dénomination sociale :</label>
                            <input type="text" class="form-control" id="denomination_sociale" name="denomination_sociale" value="<?= $client['denomination_sociale'] ?>">
                        </div>
                    </div>
                </div>
                <input type="submit" class="btn btn-warning" name="edit_client" value="modifier">
                <a href="index.php" class="btn btn-primary"> retour</a>
            </form>
        </div>
    </div>

<?php
include '../include/footer.php';
include '../include/bottom.php';
