<?php
/**
 * Error reporting
 */

use Framework\Router\Router;

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


// Подключение файлов системы
require_once dirname(__DIR__) . '/Config/config.php';
//require_once dirname(__DIR__) .'/Framework/Core/autoload.php';
require_once  dirname(__DIR__) .'/Framework/Router/Router.php';

// Вызов Router

 



$router = new Router();

$router->run();














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