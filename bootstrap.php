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
 * je fait appel a ma config DB
 */
require_once APPLICATION_PATH.'config/config.php';

/**
 * class de mon application
 */
require_once APPLICATION_PATH.'core/Singleton.php';
require_once APPLICATION_PATH.'core/DbManager.php';
require_once APPLICATION_PATH.'core/ServiceManager.php';
require_once APPLICATION_PATH.'core/RepositoryFactory.php';
/**
 *  j'inclue mon model principal et le controller principal
 */
require APPLICATION_PATH.'core/Model.php';
require APPLICATION_PATH.'core/Controller.php';

/**
 * service que nous voulons utiliser
 */
$serviceManager = ServiceManager::getInstance()
    ->addService(
        'db',
        DbManager::getInstance()
           ->setRepository(RepositoryFactory::getInstance())
    )
;