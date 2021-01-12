<?php
include '../admin/config/config.php';
include '../admin/config/bdd.php';

 $sql = 'SELECT * FROM actualite WHERE statut = 0 ORDER BY date_creation LIMIT 5' ;
 $req = $bdd->prepare($sql);
 $req->execute();
 $actualites = $req->fetchAll(PDO::FETCH_ASSOC);

include '../include/head.php';
include '../include/menu.php';
?>

    <h1 class="text-center mt-5">Site web Locabox Actualités</h1>
<?php foreach ($actualites as $actualite): ?>
    <div class="jumbotron">
        <h1 class="display-4"><?= $actualite['titre'] ?></h1>
        <p class="lead">
            <img src="<?= URL_ADMIN.'img/illustration/'.$actualite['illustration_miniature']?>" alt="">
            <?= substr($actualite['contenu'], 0, 100) . ' ...' ?>
        </p>
        <hr class="my-4">
        <a class="btn btn-primary btn-lg" href="#" role="button">Lire plus</a>
    </div>
<?php endforeach; ?>

<?php
include '../include/bottom.php';
?>