<?php
/**
 * Error reporting
 */

use App\Controllers\ErrorController;

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


// Подключение файлов системы
require_once dirname(__DIR__) .'/vendor/autoload.php';
require_once dirname(__DIR__) . '/Config/config.php';
require_once  dirname(__DIR__) .'/Framework/Router/Router.php';


// Вызов Router

 

try{
	$router = new Router();
	$router->run();

	$controler= new $router->controller;
	$action = new $router->action;
	$parameters = new $router->parameters;
} catch (Exception $e){
	$controller = new ErrorController();
	$controler->notFound();
}