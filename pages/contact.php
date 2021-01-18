<?php
include '../admin/config/config.php';
include '../include/head.php';
include '../include/menu.php';
?>

    <h1 class="text-center mt-5">Site web Locabox Contact</h1>
    <div class="container">
        <form action="action.php" method="POST" class="text-center">
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="nom">Nom :</label>
                        <input type="text" class="form-control" id="nom" name="nom">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="prenom">Prénom :</label>
                        <input type="text" class="form-control" id="prenom" name="prenom">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="mail">Mail :</label>
                        <input type="text" class="form-control" id="mail" name="mail">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="telephone">Téléphone :</label>
                        <input type="text" class="form-control" id="telephone" name="telephone">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="objet">Objet</label>
                <select class="form-control" id="objet" name="objet">
                    <option>Information</option>
                    <option>Prise de rendez-vous</option>
                    <option>Demande de location</option>
                </select>
            </div>
            <div class="form-group">
                <label for="message">Message :</label>
                <textarea class="form-control" name="message" id="message" rows="6"></textarea>
            </div>
            <input type="submit" name="btn_contact" class="btn btn-primary" value="Envoyer">
        </form>
    </div>

<?php
include '../include/bottom.php';
?>