<?php
include '../config/config.php';

if (!isLogged()){
    header('location:'.URL_ADMIN.'login.php');
    die;
}

include '../config/bdd.php';

$sqlClients = 'SELECT * FROM client WHERE statut=0';
$req = $bdd->prepare($sqlClients);
$req->execute();
$clients = $req->fetchAll(PDO::FETCH_ASSOC);

$sqlBoxs = 'SELECT * FROM box WHERE statut=0 AND disponibilite = 0';
$req = $bdd->prepare($sqlBoxs);
$req->execute();
$boxs = $req->fetchAll(PDO::FETCH_ASSOC);

include '../include/head.php';
include '../include/sidebar.php';
include '../include/topbar.php';
?>

    <div class="container">
        <h1 class="text-center mt-4">Add Location</h1>
        <form action="action.php" method="POST" class="text-center">
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="client">Liste des clients :</label>
                        <select class="form-control user-client" id="liste_client" name="client">
                            <?php  foreach ($clients as $client): ?>
                                <option value="<?= $client['id'] ?>"><?= $client['nom']. ' '.$client['prenom'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="box">Liste des boxs :</label>
                        <select class="form-control user-box" id="liste_box" name="box">
                            <?php  foreach ($boxs as $box): ?>
                                <option value="<?= $box['id'] ?>"><?= $box['numero']. ' | '.$box['surface'].'m² | '.$box['volume'].' m³' ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="date_debut">Date début : </label>
                        <input type="text" class="form-control datepicker" name="date_debut" id="date_debut">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="date_fin">Date fin : </label>
                        <input type="text" class="form-control datepicker" name="date_fin" id="date_fin">
                    </div>
                </div>
            </div>
            <input type="submit" name="add_location" class="btn btn-success btn-lg" value="créer la location">
        </form>
    </div>

<?php
include '../include/footer.php';
include '../include/bottom.php';