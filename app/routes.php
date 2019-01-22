<?php
/**
 * Created by PhpStorm.
 * User: zoulamambour
 * Date: 2019-01-21
 * Time: 17:26
 */
use Core\Routing\Router;

/**
 * Liste des routes
 */

$router = Router::getInstance();

$router->add('', 'Home@index');
$router->add('list', 'Home@listContacts');


$router->add('login', 'User@postLogin');




$router->add('create-contact', 'Contact@create');

$router->add('create', 'Contact@save');






