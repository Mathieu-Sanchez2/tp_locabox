<?php
    include 'config/config.php';
    include 'config/bdd.php';
    require_once 'vendor/Faker-master/src/autoload.php';
    include 'include/head.php';
    include 'include/sidebar.php';
    include 'include/topbar.php';
?>

    <h1 class="text-center mt-4">Index Back Office</h1>

<?php
    $faker = Faker\Factory::create('fr_FR');
//    var_dump($faker);
//    var_dump($faker->firstName);
//    var_dump($faker->lastName);
//    var_dump($faker->safeEmail);
//    var_dump($faker->mobileNumber);
//    var_dump($faker->phoneNumber);
//    var_dump($faker->streetAddress);
//    var_dump($faker->city);
//    var_dump($faker->postcode);
//    var_dump(strval($faker->randomFloat($nbMaxDecimals = NULL, $min = 11111111111111, $max = 99999999999999)));
//    var_dump($faker->company);


    $client = array();
    $client['nom'] = $faker->firstName;
    $client['prenom'] = $faker->lastName;
    $client['mail'] = $faker->safeEmail;
    $client['telephone_fixe'] = $faker->mobileNumber;
    $client['telephone_portable'] = $faker->phoneNumber;
    $client['adresse'] = $faker->streetAddress;
    $client['ville'] = $faker->city;
    $client['code_postal'] = $faker->postcode;
    var_dump($client);





include 'include/footer.php';
    include 'include/bottom.php';