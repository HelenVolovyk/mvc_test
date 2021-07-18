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





















//include('common/function.php');
//include('layouts/layout.php');
//include('views/template.php');





// $template = new Template('views/template.php');

// $params = 'db/warehouse.php';

// $params = [
// 	['name' => "product1", 'quantity' => 10],
// 	['name' => "product2", 'quantity' => 8],
// 	['name' => "product3", 'quantity' => 6]
// ];

// $title = 'categories__list';
// $layout = 'layouts/layout.php';
// $template->set($params, $title, $layout);
// $template->renderHTML();