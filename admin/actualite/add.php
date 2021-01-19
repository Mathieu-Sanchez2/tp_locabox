<?php
include '../config/config.php';

if (!isLogged()){
    header('location:'.URL_ADMIN.'login.php');
    die;
}

include '../include/head.php';
include '../include/sidebar.php';
include '../include/topbar.php';
?>

    <div class="container">
        <h1 class="text-center mt-4">Add Actualite</h1>
        <form action="action.php" method="POST" class="text-center" enctype="multipart/form-data">
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="titre">Titre :</label>
                        <input type="text" class="form-control" id="titre" name="titre">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="slug">Slug :</label>
                        <input type="text" class="form-control" id="slug" name="slug">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="illustration">Illustration :</label>
                <input type="file" class="form-control" id="illustration" name="illustration">
            </div>
            <div class="form-group">
                <label for="contenu">Contenu :</label>
                <textarea name="contenu" id="contenu" cols="30" rows="10"></textarea>
            </div>
            <input type="submit" name="add_actu" value="créer" class="btn btn-success btn-lg">
        </form>
    </div>

<?php
include '../include/footer.php';
include '../include/bottom.php';