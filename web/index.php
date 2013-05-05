<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/** bootsrap*/
require '../bootstrap.php';
/** c'est le dispatcheur */

$controller;
/**
 * j'explode l URI demandé a fin de définir le controller et la method demandé
 */
//var_dump($_SERVER);
$params = explode('/', $_GET['p']);//$_SERVER['REQUEST_URI']
$controlle = isset($params[0]) && !empty($params[0]) ? $params[0] : "index";
$action = isset($params[1]) ? $params[1] : 'view';

/**
 * j'inclue le controller et la methode si il y'en a une
 */

if(file_exists(APPLICATION_PATH.'controllers/'.$controlle.'Controller.php')){
require  (APPLICATION_PATH.'controllers/'.$controlle.'Controller.php');
$controller = new $controlle($serviceManager);
}
    

if(method_exists($controller, $action)){
    $controller->$action();
}  else {
    echo '404 error';
}
//var_dump($params);
//
//var_dump($action);
//
//var_dump('root :'.ROOT);
//
//var_dump('webroot :'.WEBROOT);
//
//var_dump('root_path :'.ROOT_PATH);
//
//var_dump('application_path :'.APPLICATION_PATH);


