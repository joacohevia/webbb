<?php
require_once './libs/Router.php';
require_once './app/Controllers/Controller.Produc.api.php';
require_once './app/Controllers/Controller.Categ.api.php';


$router = new Router();

// defina la tabla de ruteo
//controller produc
$router->addRoute('lista', 'GET', 'ControllerProducApi', 'ListProduc');
$router->addRoute('lista/:ID', 'GET', 'ControllerProducApi', 'ListProduc');
$router->addRoute('lista/:ID', 'DELETE', 'ControllerProducApi', 'BorrarItem');
$router->addRoute('lista', 'POST', 'ControllerProducApi', 'insertItem');
$router->addRoute('lista/:ID', 'PUT', 'ControllerProducApi', 'ModItems');

//controller categoria
$router->addRoute('categoria', 'GET', 'ControllerCategApi', 'ListCateg');
$router->addRoute('categoria/:ID', 'GET', 'ControllerCategApi', 'ListCateg');
$router->addRoute('categoria/:ID', 'DELETE', 'ControllerCategApi', 'BorrarCateg');
$router->addRoute('categoria', 'POST', 'ControllerCategApi', 'insertCateg');
$router->addRoute('categoria/:ID', 'PUT', 'ControllerCategApi', 'ModCateg'); 


// ejecuta la ruta (sea cual sea)
$router->route($_GET["resource"], $_SERVER['REQUEST_METHOD']);
//implementar default