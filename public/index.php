<?php
/**
 * Error reporting
 */

use App\Controllers\ErrorController;
use Framework\Router\Router;

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


// Подключение файлов системы
require_once dirname(__DIR__) .'/vendor/autoload.php';
require_once dirname(__DIR__) . '/Const/const.php';
require_once  dirname(__DIR__) .'/Framework/Router/Router.php';


// Вызов Router

 try{
	$router = new Router; 
	$router->run();

} catch (Exception $e){
	$controller = new ErrorController();
	$controller->notFound();
}