<?php
$user = 'tp_locabox';
$mdp = 'MBxZCFHK3p6OGdot';

try {
    $bdd = new PDO('mysql:dbname=tp_locabox;host=127.0.0.1', $user, $mdp);
} catch (PDOException $e) {
    echo 'Connexion échouée : ' . $e->getMessage();
}