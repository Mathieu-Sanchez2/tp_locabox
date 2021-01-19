<?php
session_start();

define('URL','http://localhost/tp_locabox/');
define('URL_ADMIN','http://localhost/tp_locabox/admin/');

function isLogged(){
    if (isset($_SESSION['connect']) && $_SESSION['connect'] === true){
        return true;
    }
    return false;
}