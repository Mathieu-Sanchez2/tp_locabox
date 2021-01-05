<?php
    include 'config/config.php';
    include 'config/bdd.php';
    require_once 'vendor/Faker-master/src/autoload.php';
    include 'include/head.php';
    include 'include/sidebar.php';
    include 'include/topbar.php';
?>

    <h1 class="text-center mt-4">FAKER</h1>

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



// création des clients
    $client = array();
    // client part
    for ($i = 0; $i <= 65; $i++){
        $client['nom'] = $faker->firstName;
        $client['prenom'] = $faker->lastName;
        $client['mail'] = $faker->safeEmail;
        $client['telephone_portable'] = $faker->phoneNumber;
        $client['telephone_fixe'] = $faker->mobileNumber;
        $client['adresse'] = $faker->streetAddress;
        $client['ville'] = $faker->city;
        $client['code_postal'] = $faker->postcode;
        $client['siret'] = '';
        $client['denomination_social'] = '';
        $clients[] = $client;
    }
    //client pro
    for ($i = 0; $i <= 35; $i++){
        $client['nom'] = $faker->firstName;
        $client['prenom'] = $faker->lastName;
        $client['mail'] = $faker->safeEmail;
        $client['telephone_portable'] = $faker->phoneNumber;
        $client['telephone_fixe'] = $faker->mobileNumber;
        $client['adresse'] = $faker->streetAddress;
        $client['ville'] = $faker->city;
        $client['code_postal'] = $faker->postcode;
        $client['siret'] = strval($faker->randomFloat($nbMaxDecimals = NULL, $min = 11111111111111, $max = 99999999999999));
        $client['denomination_social'] = $faker->company;
        $clients[] = $client;
    }
//    var_dump($clients);

// insertion des clients
    foreach ($clients as $client){
//        var_dump($client);
        $sql = 'INSERT INTO client (id, nom, prenom, mail, telephone_portable, telephone_fixe, adresse, ville, code_postal, siret, denomination_sociale, statut) VALUES (null, "' . $client['nom'] . '", "' . $client['prenom'] . '", "' . $client['mail'] . '", "' . $client['telephone_portable'] . '", "' . $client['telephone_fixe'] . '", "' . $client['adresse'] . '", "' . $client['ville'] . '", "' . $client['code_postal'] . '",  "' . $client['siret'] . '", "' . $client['denomination_social'] . '", 0)';
//        var_dump($sql);
//        echo $sql . '<br><br>';
//        $req = $bdd->prepare($sql);
//        $req->execute();
    }

//// insertion des clients
//foreach ($clients as $client){
////        var_dump($client);
//    $champs = implode(', ', array_keys($client));
////        var_dump($champs);
//    $sql = 'INSERT INTO client (id, ' . $champs . ', statut) VALUES (null, "' . $client['nom'] . '", "' . $client['prenom'] . '", "' . $client['mail'] . '", "' . $client['telephone_portable'] . '", "' . $client['telephone_fixe'] . '", "' . $client['adresse'] . '", "' . $client['ville'] . '", "' . $client['code_postal'] . '",  "' . $client['siret'] . '", "' . $client['denomination_social'] . '", 0)';
//    var_dump($sql);
//}





include 'include/footer.php';
include 'include/bottom.php';