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

function isSuperAdmin(){
    if (isset($_SESSION['utilisateur']['roles']) && in_array('super admin', $_SESSION['utilisateur']['roles'])){
        return true;
    }
    return false;
}
function isAdmin(){
    if (isset($_SESSION['utilisateur']['roles']) && in_array('admin', $_SESSION['utilisateur']['roles'])){
        return true;
    }
    return false;
}
function isSalarie(){
    if (isset($_SESSION['utilisateur']['roles']) && in_array('salarié', $_SESSION['utilisateur']['roles'])){
        return true;
    }
    return false;
}
function isRedacteur(){
    if (isset($_SESSION['utilisateur']['roles']) && in_array('rédacteur', $_SESSION['utilisateur']['roles'])){
        return true;
    }
    return false;
}


