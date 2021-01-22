<?php
    include 'config/config.php';

    if (!isLogged()){
    header('location:'.URL_ADMIN.'login.php');
    die;
}

    include 'config/bdd.php';
    require_once 'vendor/Faker-master/src/autoload.php';
    include 'include/head.php';
    include 'include/sidebar.php';
    include 'include/topbar.php';
?>

    <h1 class="text-center mt-4">Index Back Office</h1>
<?php
    var_dump($_SESSION);
    var_dump('Super admin', isSuperAdmin());
    var_dump('admin', isAdmin());
    var_dump('Salarié', isSalarie());
    var_dump('rédacteur', isRedacteur());
?>

<?php
    include 'include/footer.php';
    include 'include/bottom.php';