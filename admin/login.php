<?php
include 'config/config.php';

if (isLogged()){
    header('location:index.php');
    die;
}

include 'config/bdd.php';
include 'include/head.php';
?>

    <div class="container text-center">
        <h1 class="mt-4">Login Administration</h1>
        <form action="action.php" method="POST" class="text-center">
            <div class="form-group">
                <label for="mail">Mail :</label>
                <input type="text" name="mail" class="form-control" id="mail">
            </div>
            <div class="form-group">
                <label for="mot_de_passe">Mot de passe :</label>
                <input type="password" name="mot_de_passe" class="form-control" id="mot_de_passe">
            </div>
            <input type="submit" name="connect" class="btn btn-primary" value="Se connecter">
        </form>
    </div>

<?php
include 'include/bottom.php';