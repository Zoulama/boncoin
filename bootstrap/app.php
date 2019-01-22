<?php

/**
 * Created by PhpStorm.
 * User: zoulamambour
 * Date: 2019-01-18
 * Time: 20:02
 */

use Core\Routing\Router;
use Core\Foundation\Application;

/**
 * Créer l'application
 */

/**
 * Instancier Router
 */
$router = Router::getInstance();

/**
 * Instancier Application
 */
$app = new Application($router);


//$app->singleton(
//    abstract,
//    concret
//);
/**
 * Retourner Application
 */
return $app;
