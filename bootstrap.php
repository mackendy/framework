<?php
//define('ROOT_PATH', dirname(__DIR__));
//define('APPLICATION_PATH', ROOT_PATH.'/application');


/**
 * Je définie les routes 
 */
define('WEBROOT', str_replace('index.php', '', $_SERVER['SCRIPT_NAME']));
define('ROOT', str_replace('index.php', '', $_SERVER['SCRIPT_FILENAME']));
define('ROOT_PATH', dirname(__DIR__));
define('APPLICATION_PATH', ROOT_PATH.'/mvc/');
/**
 *  j'inclue mon model principal et le controller principal
 */
require APPLICATION_PATH.'core/Model.class.php';
require APPLICATION_PATH.'core/Controller.class.php';