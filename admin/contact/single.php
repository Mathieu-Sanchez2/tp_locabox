<?php
include '../config/config.php';

if (!isLogged()){
    header('location:'.URL_ADMIN.'login.php');
    die;
}

include '../config/bdd.php';

if (isset($_GET['id'])){
    $id = intval($_GET['id']);
    if ($id > 0){
        $sql = 'SELECT * FROM contact WHERE id = ' . $id;
        $req = $bdd->prepare($sql);
        $req->execute();
        $contact = $req->fetch(PDO::FETCH_ASSOC);
//        var_dump($contact);
    }
}

include '../include/head.php';
include '../include/sidebar.php';
include '../include/topbar.php';
?>

    <div class="container">
        <h1 class="text-center mt-4">Reponse Contact</h1>
        <form action="action.php" method="post" class="text-center">
            <div class="form-group">
                <label for="statut">Statut :</label>
                <input type="text" class="form-control" id="statut" name="statut" value="<?= $contact['statut'] ?>" readonly>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="nom">Nom :</label>
                        <input type="text" class="form-control" id="nom" name="nom" value="<?= $contact['nom'] ?>" readonly>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="prenom">Prénom :</label>
                        <input type="text" class="form-control" id="prenom" name="prenom" value="<?= $contact['prenom'] ?>" readonly>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="mail">Mail :</label>
                        <input type="text" class="form-control" id="mail" name="mail" value="<?= $contact['mail'] ?>" readonly>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="telephone">Téléphone :</label>
                        <input type="text" class="form-control" id="telephone" name="telephone" value="<?= $contact['telephone'] ?>" readonly>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="objet">Objet</label>
                <input class="form-control" id="objet" name="objet" value="<?= $contact['objet'] ?>" readonly>
            </div>
            <div class="form-group">
                <label for="message">Message :</label>
                <textarea class="form-control" name="message" id="message" rows="6" readonly><?= $contact['message'] ?></textarea>
            </div>
            <a href="repondre.php?id=<?= $contact['id']; ?>" class="btn btn-success">Répondre</a>
            <a href="index.php" class="btn btn-primary">Retour</a>
        </form>
    </div>

<?php
include '../include/footer.php';
include '../include/bottom.php';