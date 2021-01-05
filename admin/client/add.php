<?php
include '../config/config.php';
include '../include/head.php';
include '../include/sidebar.php';
include '../include/topbar.php';
?>

    <div class="container">
        <h1 class="text-center mt-4">Add client</h1>
        <div class="container mt-4">
            <form action="action.php" method="POST" class="text-center mt-4">
                <div class="row">
                    <div class="col-4">
                        <div class="form-group">
                            <label for="nom">Nom :</label>
                            <input type="text" class="form-control" id="nom" name="nom" value="">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <label for="prenom">Prénom :</label>
                            <input type="text" class="form-control" id="prenom" name="prenom" value="">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <label for="mail">Mail :</label>
                            <input type="text" class="form-control" id="mail" name="mail" value="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        <div class="form-group">
                            <label for="adresse">Adresse :</label>
                            <input type="text" class="form-control" id="adresse" name="adresse" value="">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <label for="ville">Ville :</label>
                            <input type="text" class="form-control" id="ville" name="ville" value="">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <label for="code_postal">Code postal :</label>
                            <input type="text" class="form-control" id="code_postal" name="code_postal" value="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="tel_port">Téléphone portable :</label>
                            <input type="text" class="form-control" id="tel_port" name="tel_port" value="">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="tel_fixe">Téléphone fixe :</label>
                            <input type="text" class="form-control" id="tel_fixe" name="tel_fixe" value="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="denomination_sociale">Dénomination sociale :</label>
                            <input type="text" class="form-control" id="denomination_sociale" name="denomination_sociale" value="">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="siret">N° SIRET :</label>
                            <input type="text" class="form-control" id="siret" name="siret" value="">
                        </div>
                    </div>
                </div>
                <input type="submit" name="add_client" value="créer" class="btn btn-success">
            </form>
        </div>
    </div>

<?php
include '../include/footer.php';
include '../include/bottom.php';