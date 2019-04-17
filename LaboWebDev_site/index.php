<?php

include_once '_config/config.php';
include_once '_config/db.php';
include_once '_functions/functions.php';


include_once '_classes/Autoloader.php';
Autoloader::register();


$timeZone = 'Europe/Paris';
date_default_timezone_set($timeZone);





// Définition de la page courante

if (isset($_GET['page']) AND !empty($_GET['page'])) {
    $page = trim(strtolower($_GET['page']));
} else{
    $page ='home';
}
// Définition de la langue de l'utilisateur
$_SESSION['lang'] = getUserLanguage();

//Array contenant toutes les pages
$allPages = scandir('controllers/');

// Vérification de l'existence de la page
if (in_array($page.'_controller.php', $allPages)) {

    $lang = getPageLanguage($_SESSION['lang'], ['header', $page, 'footer']);
    debug($lang);

    //Inclusion de la page
    include_once 'models/'.$page.'_model.php';
    include_once 'controllers/'.$page.'_controller.php';
    include_once 'views/'.$page.'_view.php';

} else {
    // Retour d'une erreur

    echo 'Erreur 404,5';
}