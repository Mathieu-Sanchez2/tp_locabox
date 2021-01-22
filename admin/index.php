<?php
    include 'config/config.php';

    if (!isLogged()){
    header('location:'.URL_ADMIN.'login.php');
    die;
}

    include 'config/bdd.php';
    // require_once 'vendor/Faker-master/src/autoload.php';
    include 'vendor/autoload.php';
    include 'include/head.php';
    include 'include/sidebar.php';
    include 'include/topbar.php';
?>

    <h1 class="text-center mt-4">Index Back Office</h1>
<?php
    $contrat = new PhpOffice\PhpWord\TemplateProcessor(URL_ADMIN . 'location/contrat/template/template_contrat.docx');
    // var_dump($contrat);
    $contrat->setValue('prenom', 'Coucou1');
    $contrat->setValue('nom', 'coucou2');
    $contrat->saveAs('c:/wamp64/www/tp_locabox/admin/location/contrat/demo2.docx');
?>

<?php
    include 'include/footer.php';
    include 'include/bottom.php';