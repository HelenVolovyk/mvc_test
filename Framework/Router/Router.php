<?php
namespace Framework\Router;

use Exception;

/**
 * Класс Router
 *
*/
class Router
{

    /**
	  *   @var array 
     */
    private $routes;


    public function __construct()
    {
        $routesPath = ROOT_PATH . '/Framework/Router/routes.php';
        $this->routes = include($routesPath);
    }

  
    private function getURI()
    {
        if (!empty($_SERVER['REQUEST_URI'])) {
            return trim($_SERVER['REQUEST_URI'], '/');
        }
    }

  
    public function run()
    {
		  $uri = $this->getURI();
	
        foreach ($this->routes as $uriPattern => $path) {
    
            if (preg_match("~$uriPattern~", $uri)) {

                $internalRoute = preg_replace("~$uriPattern~", $path, $uri);

					 $segments = explode('/', $internalRoute);
										 
                $controllerName =  array_shift($segments) . 'Controller';
                $controllerName = ucfirst($controllerName);
				
				
                $actionName =   ucfirst(array_shift($segments));
			
					 $parameters = $segments;
			
		 							
					 if (class_exists("App\\Controllers\\" . $controllerName)){
						$controller = "App\\Controllers\\" . $controllerName;
					//	echo $controller;
										
						$controller = new $controller;

						call_user_func_array([$controller, $actionName], $parameters);
								 
					}
			             
				} 
				// else {
				// 	throw new \Exception(' Controller not found'); 
				// }
        } 
    }
}

		