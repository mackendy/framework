<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/** bootsrap*/
require '../bootstrap.php';
/** c'est le dispatcheur */

/**
 * j'explode l URI demandé a fin de définir le controller et la method demandé
 */
$controlle="";$controller="";
var_dump($_SERVER);
$params = explode('/', $_SERVER['REQUEST_URI']);
$controlle = isset($params[2]) ? $params[2] :"";
$action = isset($params[3]) ? $params[3] : 'index';

/**
 * j'inclue le controller et la methode si il y'en a une
 */
if(!empty($controler)){
require  (APPLICATION_PATH.'controllers/'.$controlle.'.class.php');

$controller = new $controlle();
}
if(method_exists($controller, $action)){
    $controller->$action();
}  else {
    echo '404 error';
}

var_dump('root :'.ROOT);

var_dump('webroot :'.WEBROOT);

var_dump('root_path :'.ROOT_PATH);

var_dump('application_path :'.APPLICATION_PATH);