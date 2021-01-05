<?php
include '../config/config.php';
include '../include/head.php';
include '../include/sidebar.php';
include '../include/topbar.php';
?>

    <div class="container">
        <h1 class="text-center mt-4">Add User</h1>
        <form action="action.php" method="POST" class="text-center">
            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <label for="numero">Numéro :</label>
                        <input type="text" class="form-control" id="numero" name="numero" value="">
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label for="prix">Prix :</label>
                        <input type="text" class="form-control" id="prix" name="prix" value="">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <label for="surface">Surface :</label>
                        <input type="text" class="form-control" id="surface" name="surface" value="">
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label for="volume">Volume :</label>
                        <input type="text" class="form-control" id="volume" name="volume" value="">
                    </div>
                </div>
            </div>
            <input type="submit" name="add_box" value="créer" class="btn btn-success">
            <a href="index.php" class="btn btn-primary">retour</a>
        </form>
    </div>

<?php
include '../include/footer.php';
include '../include/bottom.php';