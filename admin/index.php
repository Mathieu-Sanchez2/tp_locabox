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
<?php var_dump($_SESSION); ?>

<?php
    include 'include/footer.php';
    include 'include/bottom.php';