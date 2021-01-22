<?php
include '../config/config.php';

if (!isLogged()){
    header('location:'.URL_ADMIN.'login.php');
    die;
}
if (!isSuperAdmin() || !isSalarie()){
    header('location:'.URL_ADMIN.'index.php');
    die;
}
include '../include/head.php';
include '../include/sidebar.php';
include '../include/topbar.php';
?>

    <div class="container">
        <h1 class="text-center mt-4">Update Location</h1>
    </div>

<?php
include '../include/footer.php';
include '../include/bottom.php';
