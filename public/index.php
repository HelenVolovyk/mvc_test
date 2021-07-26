<?php
/**
 * Error reporting
 */

use App\Controllers\ErrorController;
use Framework\Core\AbsModel;
use Framework\Router\Router;

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


// Подключение файлов системы
require_once dirname(__DIR__) .'/vendor/autoload.php';
require_once dirname(__DIR__) . '/Const/const.php';

session_start();

// Вызов Router

 try{
	$router = new Router; 
	$router->run();

	 $controller = $router->controller;
	 $controller = new $controller;

	 $action = $router->actionName;
	 $parameters = $router->parameters;

	 call_user_func_array([$controller, $action], $parameters);
	
  } catch (Exception $e){
	// $controller = new ErrorController();
	// $controller->notFound();
}

$absModel = new AbsModel();