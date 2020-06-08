<?php

class Router
{

    private $routes;

    public function __construct()
    {

        $routesPath = './config/routes.php';
        $this->routes = include($routesPath);
    }

    private function getURI()
    {
        if (!empty($_SERVER['REQUEST_URI'])) {
            $getUri = $_SERVER['REQUEST_URI'];

            $deleteProjectUrl = str_replace(HOME_ROOT, '', $getUri);

            return trim($deleteProjectUrl, '/');
        }
    }

    public function run()
    {
        $uri = $this->getURI();


        foreach ($this->routes as $uriPattern => $path) {

            if (preg_match("~$uriPattern~", $uri)) {

                $internalRoute = preg_replace("~$uriPattern~", $path, $uri);;

                $segments = explode('/', $internalRoute);

                $controllerName = array_shift($segments) . 'Controller';
                $controllerName = ucfirst($controllerName);

                $actionName = 'action' . ucfirst(array_shift($segments));

                $parameters = $segments;

                $controllerFile = './controllers/' . $controllerName . '.php';

                if (file_exists($controllerFile)) {
                    include_once($controllerFile);
                }

                $controllerObject = new $controllerName;


                $result = call_user_func_array(array($controllerObject, $actionName), $parameters);


                if ($result != null) {
                    break;
                } else {
                    header('Location:' . HOME_ROOT);
                    break;
                }
            }
        }
    }
}
