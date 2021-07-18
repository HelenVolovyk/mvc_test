<?php
namespace Router;


use App\Controllers\ErrorController;
use App\Controllers\HomeController;

use Framework\Core\Exception\BadRouteException;

/**
 * Класс Router
 * Компонент для работы с маршрутами
 */
class Router
{

    /**
     * Свойство для хранения массива роутов
     * @var array 
     */
    private $routes;

    /**
     * Конструктор
     */
    public function __construct()
    {
        // Путь к файлу с роутами
        $routesPath = ROOT_PATH . '/Framework/Router/routes.php';

        // Получаем роуты из файла
        $this->routes = include($routesPath);
    }

    /**
     * Возвращает строку запроса
     */
    private function getURI()
    {
        if (!empty($_SERVER['REQUEST_URI'])) {
            return trim($_SERVER['REQUEST_URI'], '/');
        }
    }

    /**
     * Метод для обработки запроса
     */
    public function run()
    {
        // Получаем строку запроса
        $uri = $this->getURI();

        // Проверяем наличие такого запроса в массиве маршрутов (routes.php)
        foreach ($this->routes as $uriPattern => $path) {

            // Сравниваем $uriPattern и $uri
            if (preg_match("~$uriPattern~", $uri)) {

                // Получаем внутренний путь из внешнего согласно правилу.
                $internalRoute = preg_replace("~$uriPattern~", $path, $uri);

                // Определить контроллер, action, параметры

                $segments = explode('/', $internalRoute);

                $controllerName = array_shift($segments) . 'Controller';
                $controllerName = ucfirst($controllerName);

					 $this->controller = $controllerName;
					 
                $actionName = 'action' . ucfirst(array_shift($segments));

					 $this->action = $actionName;
					 
					 $parameters = $segments;
					 
					 $this->parameters = $parameters;

                // Подключить файл класса-контроллера
                $controllerFile = ROOT_PATH . '/App/Controllers/' .
                        $controllerName . '.php';
						
								
                if (file_exists($controllerFile)) {
						include_once($controllerFile);
                }
								
              					 
					 // Создать объект, вызвать метод (т.е. action)
				
					 $controllerObject =  $controllerName;
				
							
                /* Вызываем необходимый метод ($actionName) у определенного 
                 * класса ($controllerObject) с заданными ($parameters) параметрами
                 */
               //  $result = call_user_func_array(array($controllerObject, $actionName), $parameters);

                // Если метод контроллера успешно вызван, завершаем работу роутера
               // if ($result != null) {
               //     break;
               // }
            }
        }
    }

}

		